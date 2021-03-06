$(document).ready(function () {

  /**
   * Lazy load initialization
   */
  $('.lazy').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    visibleOnly: true,
    onError: function(element) {
      console.log('error loading ' + element.data('src'));
    }
  });

  /**
   * Scrollreveal initialization
   */
  ScrollReveal().reveal('.reveal', {duration:2000});

  /**
   * Carousel initialization
   */
  $('.carousel-item').first().addClass('active');

  /**
   * WP Markup Styling
   */
  // WP Comments markup
  $('ol.comment-list').addClass('pl-0');
  $('ol.children').addClass('pl-0');
  $('.comment').addClass('card shadow m-4');
  $('.comment-meta').addClass('card-header small');
  $('.comment-body>p').addClass('p-2')
  $('.comment-author').addClass('card-header border-bottom-0');
  $('.comment-author>*').addClass('mr-1');
  $('.comment-author>b>a').addClass('unlink');
  $('.avatar').addClass('rounded-circle shadow');
  $('.comment-metadata>a').addClass('unlink small');
  $('.comment-content').addClass('card-body');
  $('.reply').addClass('card-footer');
  $('.comment-reply-link').addClass('btn btn-outline-success shadow');
  $('.comment-respond').addClass('p-4 text-center');
  $('.logged-in-as>a').addClass('small unlink');
  $('.comment-form-comment>textarea').addClass('form-control');
  $('.comment-form-comment>label').addClass('d-none');
  $('#submit').addClass('btn btn-outline-success');
  $('input#author, input#email, input#url').addClass('form-control');
  $('#cancel-comment-reply-link').addClass('ml-3');
  $('#reply-title').addClass('h4');
  // Featured image
  $('.post-thumbnail>img')
      .addClass('img-thumbnail img-fluid shadow mx-auto d-block ');
  $('.post-thumbnail>img').css('max-height', '200px');
  $('.post-thumbnail>img').css('width', 'auto');
  // Custom logo link image
  $('.custom-logo-link>img').css('max-height', '50px');
  $('.custom-logo-link>img').css('width', 'auto');
  // Footer widgets
  $('.site-footer a').addClass('unlink');
  $('footer ul, footer li').css('list-style-type', 'none');
  $('footer ul').css('margin', '0px');
  // Posts navigation links
  $('#posts-navigation a').addClass('btn btn-dark m-2');
  $('body').removeClass('d-none');

});

