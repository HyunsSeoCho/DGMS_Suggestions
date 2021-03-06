﻿(function() {
  var IPHONE, iPhoneController;

  iPhoneController = (function() {
    function iPhoneController() {}

    iPhoneController.prototype.init = function() {
      this.setTime();
      this.loading();
      this.pin();
      this.controls();
      this.colors();
      return this.parallaxBG();
    };

    iPhoneController.prototype.loading = function() {
      return setTimeout(function() {
        return $('.loading').fadeOut(200, function() {});
      }, 1500);
    };

    iPhoneController.prototype.controls = function() {
      $('.app a, .home a').on('click', function(e) {
        e.preventDefault();
        return IPHONE.alert('show');
      });
      $('.alert a').on('click', function(e) {
        e.preventDefault();
        return IPHONE.alert('hide');
      });
      return $('.power').on('click', function(e) {
        e.preventDefault();
        $('.overlay').fadeOut();
        return $('.lock').fadeIn();
      });
    };

    iPhoneController.prototype.alert = function(action) {
      if (action === 'show') {
        return $('.overlay').fadeIn(200, function() {
          return $('.alert').addClass('pop');
        });
      } else {
        return $('.overlay').fadeOut(200, function() {
          return $('.alert').removeClass('pop');
        });
      }
    };

    iPhoneController.prototype.colors = function() {
      return $('#switch a').on('click', function(e) {
        var color;
        e.preventDefault();
        color = $(this).data('color');
        return $('#iphone-6').removeClass().addClass(color);
      });
    };

    iPhoneController.prototype.setTime = function() {
      var hours, minutes, now;
      now = new Date();
      hours = now.getHours() > 9 ? now.getHours() : '0' + now.getHours();
      minutes = now.getMinutes() > 9 ? now.getMinutes() : '0' + now.getMinutes();
      return $('.time').text(hours + ':' + minutes);
    };

    iPhoneController.prototype.parallaxBG = function() {
      return $.parallaxify({
        positionProperty: 'transform',
        responsive: true,
        motionType: 'natural',
        mouseMotionType: 'performance',
        motionAngleX: 70,
        motionAngleY: 70,
        alphaFilter: 0.5,
        adjustBasePosition: true,
        alphaPosition: 0.025
      });
    };

    iPhoneController.prototype.pin = function() {
      var checkPin, count, input;
      input = '';
      count = 0;
      $('.keyboard div').on('click', function(e) {
        var number, value;
        e.preventDefault();
        number = $(this);
        value = number.find('em').text();
        input += value;
        $('.keyboard div').removeClass('click');
        number.addClass('click').delay(200).queue(function() {
          return $(this).removeClass('click');
        });
        $('.pills').removeClass('error').find('span').eq(count).addClass('fill');
        count++;
        if (count === 4) {
          return checkPin(input);
        }
      });
      return checkPin = function(check) {
        var pin;
        pin = '6578'
        pin2 = '0293';
        count = 0;
        input = '';
        $('.pills').find('span').removeClass('fill');
        if (check === pin) {
          // return $('.lock').fadeOut(200);
          location.replace("../teacher/encrypted/");
        }
          else if (check === pin2) {
            var passcode = randomPassword(4);
            console.log("일회용 인증코드를 정확하게 입력하세요.", [+passcode]);
            input = prompt("발급된 일회용 인증코드를 정확하게 입력하세요.");
            if (input == passcode) {
                location.replace("../webmaster/encrypted/");
              } else {
                alert("일회용 인증코드가 일치하지 않습니다");
                return false;
          }
        } else {
          return $('.pills').addClass('error');
        }
      };
    };

    return iPhoneController;

  })();

  IPHONE = new iPhoneController;

  IPHONE.init();

}).call(this);

function randomPassword(length)
{
  chars = "123456789123456789123456789";
  pass = "";
  for(x=0;x<length;x++)
  {
    i = Math.floor(Math.random() * 27);
    pass += chars.charAt(i);
  }
  return pass;
}
