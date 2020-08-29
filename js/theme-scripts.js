console.log('Theme scripts loaded!');

/**
 * WP Comments markup styling
 */
$(document).ready(function() {
  $('.comment').addClass('card shadow my-4');
  $('.comment-meta').addClass('card-header');
  $('.comment-author').addClass('mb-1');
  $('.comment-author>*').addClass('mr-1');
  $('.comment-author>b>a').addClass('unlink');
  $('.avatar').addClass('rounded-circle shadow');
  $('.comment-metadata>a').addClass('unlink small');
  $('.comment-content').addClass('card-body');
  $('.reply').addClass('card-footer');
  $('.comment-reply-link').addClass('btn btn-outline-success shadow');
  $('.comment-respond').addClass('p-4');
  $('.logged-in-as>a').addClass('small unlink');
  $('.comment-form-comment>textarea').addClass('form-control');
  $('.comment-form-comment>label').addClass('d-none');
  $('.form-submit>input').addClass('btn btn-outline-success');
  $('input#author, input#email, input#url').addClass('form-control');
  $('#cancel-comment-reply-link').addClass('ml-3');
  $('#reply-title').addClass('h4');
});

