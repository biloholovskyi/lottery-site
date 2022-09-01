$(document).ready(function () {
  $('.more-token').on('click', tokenShow);
  $('.personal-nav__item').on('click', personalNav);
  $('.main-input').on('input', validForm);
  $('.personal-modal__check').on('click', checkedLottery);
  $('.show-money, .show-lottery').on('click', openPersonalModal);
  $('.personal-modal__close').on('click', closePersonalModal);
  $('.personal-modal-money__input').on('focus', focusPersonalInput);
  $('.personal-modal-money__input').on('focusout', focusOutPersonalInput);
  $('.help__accord .item').on('click', help);
  $('.slider__dots .dot').on('click', homeSlider);
  $('.humb').on('click', mobileMenu);
  $('.mobile-menu .close').on('click', mobileMenu);
  $('.token-list__nav__wrapper .decor').on('click', tokenDropDown);
  $('.calc .minus, .calc .plus').on('click', tokenCount)
});

$(window).scroll(function(event){
  paralax();
});

function paralax() {
  var top = $(this).scrollTop();
  top = top;
  var topOne = 235;
  var topTwo = -50;
  var topThree = 440;
  var topThreeNew = -40;
  var topFor = -78;
  var topForNew = 250;

  $('#decor-one').css('top', +topOne - top + 'px');
  $('#decor-two').css('bottom', +topTwo + top + 'px');
  $('#decor-three').css('top', +topThree - top + 'px');
  $('#decor-for').css('bottom', +topFor + top + 'px');
  $('#decor-for--new').css('top', +topForNew - top + 'px');
  $('#decor-three--new').css('bottom', +topThreeNew + top + 'px');
}

function tokenShow(e) {
  e.preventDefault();
  var token = $('.token-list__body .item');
  var show = $('.token-list__body .item--show');
  var current = show.length - 1;
  if(show.length < token.length) {
    for(var i = 0; i < 5; i++) {
      token.eq(current).addClass('item--show');
      current++;
    }
  }
}

function personalNav() {
  var id = $(this).attr('id');
  $('.personal-nav__item').removeClass('personal-nav__item--active');
  $(this).addClass('personal-nav__item--active');
  $('.personal-body__content').removeClass('personal-body__content--active');
  $('#content-' + id).addClass('personal-body__content--active');
}

function validForm() {
  if($(this).val() === '') {
    $(this).parent('.main-form-input-wrapper').removeClass('main-form-input-wrapper--active');
  } else {
    $(this).parent('.main-form-input-wrapper').addClass('main-form-input-wrapper--active');
    if($(this).parent('.main-form-input-wrapper').hasClass('main-form-input-wrapper--email')) {
      var isValid = ($('#input-email').val().match(/.+?\@.+/g) || []).length === 1;
      if(!isValid) {
        $('.main-form-input-wrapper--email').addClass('main-form-input-wrapper--invalid');
      } else {
        $('.main-form-input-wrapper--email').removeClass('main-form-input-wrapper--invalid');
      }
    }
  }
}

$('.main-form').on('submit', function (e) {
  e.preventDefault();
  var isValid = ($('#input-email').val().match(/.+?\@.+/g) || []).length === 1;
  if(!isValid) {
    $('.main-form-input-wrapper--email').addClass('main-form-input-wrapper--invalid');
  } else {
    $('.main-form-input-wrapper--email').removeClass('main-form-input-wrapper--invalid');
  }
  console.log(isValid);
});

function checkedLottery() {
  if($(this).children('.token-check-input').prop('checked')) {
    $(this).children('.token-check-input').prop('checked', false);
    $(this).children('.token-check').removeClass('token-check--active');
  } else {
    $(this).children('.token-check-input').prop('checked', true);
    $(this).children('.token-check').addClass('token-check--active');
  }
}

$(document).on('click', function (e) {
  var personalModal = $('.personal-modal__lottery');
  var btn = $('.show-money, .show-lottery');

  if (!btn.is(e.target) && btn.has(e.target).length === 0) {
    if (!personalModal.is(e.target) && personalModal.has(e.target).length === 0) {
      closePersonalModal();
    }
  }
});

function closePersonalModal() {
  $('.personal-modal').css('display', 'none');
}

function openPersonalModal(e) {
  if($(this).hasClass('show-lottery')) {
    $('.personal-modal--lottery').css('display', 'block');
  } else if($(this).hasClass('show-money')) {
    e.preventDefault();
    $('.personal-modal--money').css('display', 'block');
  }
}

function focusPersonalInput() {
  $(this).parent('.personal-modal-money__input__label').addClass('personal-modal-money__input__label--focus');
}

function focusOutPersonalInput() {
  $(this).parent('.personal-modal-money__input__label').removeClass('personal-modal-money__input__label--focus');
}

function help() {
  $('.help__accord .item').removeClass('item--active');
  $(this).addClass('item--active');
  var h = $(this).children('.descr-wrapp').children('.item__desc').height();
  h += 18;
  $('.help__accord .item').children('.descr-wrapp').css('min-height', '0px');
  $(this).children('.descr-wrapp').css('min-height', h + 'px');
}

function homeSlider() {
  $('.slider__dots .dot').removeClass('dot--active');
  $(this).addClass('dot--active');

  $('.home__content__slider .slider__wrapper .slider__card').css('transform', 'translateX(-' + $('.slider__dots .dot--active').attr('data-number') + '00%)');

  for(var i = 0; i < $('.home__content__slider .slider__wrapper .slider__card').length; i++) {
    if(i < $('.slider__dots .dot--active').attr('data-number')) {
      $('.home__content__slider .slider__wrapper .slider__card').eq(i).css('opacity', '0');
    } else {
      $('.home__content__slider .slider__wrapper .slider__card').eq(i).css('opacity', '1');
    }
  }
}

function mobileMenu() {
  $('.mobile-menu').toggleClass('show');
  if($('.mobile-menu').hasClass('show')) {
    $('.mobile-menu').css('top', '0px');
  } else {
    $('.mobile-menu').css('top', '-500%');
  }
}

function tokenDropDown() {
  $('.token-list__nav__wrapper').toggleClass('drop-active');
}

function tokenCount() {
  var count = $(this).parent('.calc').children('.count').html();
  if($(this).hasClass('minus')) {
    if(+count > 0) {
      +count--;
      $(this).parent('.calc').children('.count').html(count);
    }
  } else {
    +count++;
    $(this).parent('.calc').children('.count').html(count);
  }
}