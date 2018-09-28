<?php
$animation      = get_theme_mod( 'osf_animations_buttons_background', 1 );
$primary_border = get_theme_mod( 'osf_colors_buttons_primary_border', '#222' );
$secondary_border        = get_theme_mod( 'osf_colors_buttons_secondary_border', '#767676' );

switch ($animation) {
    //========================================================================
    // Animation 2
    //========================================================================
    case 2:
        return <<<CSS
.opal-button-animation-bg-2 .button-secondary,
.opal-button-animation-bg-2 .button-outline-secondary,
.opal-button-animation-bg-2 .button-primary,
.opal-button-animation-bg-2 .button-outline-primary,
.opal-button-animation-bg-2 .search-submit,
.opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-property: color, background-color;
  transition-property: color, background-color; }
  .opal-button-animation-bg-2 .button-secondary:hover, .opal-button-animation-bg-2 .button-secondary:focus, .opal-button-animation-bg-2 .button-secondary:active,
  .opal-button-animation-bg-2 .button-outline-secondary:hover,
  .opal-button-animation-bg-2 .button-outline-secondary:focus,
  .opal-button-animation-bg-2 .button-outline-secondary:active,
  .opal-button-animation-bg-2 .button-primary:hover,
  .opal-button-animation-bg-2 .button-primary:focus,
  .opal-button-animation-bg-2 .button-primary:active,
  .opal-button-animation-bg-2 .button-outline-primary:hover,
  .opal-button-animation-bg-2 .button-outline-primary:focus,
  .opal-button-animation-bg-2 .button-outline-primary:active,
  .opal-button-animation-bg-2 .search-submit:hover,
  .opal-button-animation-bg-2 .search-submit:focus,
  .opal-button-animation-bg-2 .search-submit:active,
  .opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:hover,
  .opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:focus,
  .opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:active {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite; }
.opal-button-animation-bg-2 .button-primary:hover, .opal-button-animation-bg-2 .button-primary:focus, .opal-button-animation-bg-2 .button-primary:active,
.opal-button-animation-bg-2 .button-outline-primary:hover,
.opal-button-animation-bg-2 .button-outline-primary:focus,
.opal-button-animation-bg-2 .button-outline-primary:active,
.opal-button-animation-bg-2 .search-submit:hover,
.opal-button-animation-bg-2 .search-submit:focus,
.opal-button-animation-bg-2 .search-submit:active,
.opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:hover,
.opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:focus,
.opal-button-animation-bg-2 .entry-footer .edit-link a.post-edit-link:active {
  -webkit-animation-name: primary-back-pulse;
  animation-name: primary-back-pulse; }

.opal-button-animation-bg-2 .button-secondary:hover, .opal-button-animation-bg-2 .button-secondary:focus, .opal-button-animation-bg-2 .button-secondary:active,
.opal-button-animation-bg-2 .button-outline-secondary:hover,
.opal-button-animation-bg-2 .button-outline-secondary:focus,
.opal-button-animation-bg-2 .button-outline-secondary:active {
  -webkit-animation-name: secondary-back-pulse;
  animation-name: secondary-back-pulse; }
CSS;
    //========================================================================
    // Animation 3
    //========================================================================
    case 3:
        return <<<CSS
.opal-button-animation-bg-3 .button-secondary,
.opal-button-animation-bg-3 .button-outline-secondary,
.opal-button-animation-bg-3 .button-primary,
.opal-button-animation-bg-3 .button-outline-primary,
.opal-button-animation-bg-3 .search-submit,
.opal-button-animation-bg-3 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-3 .button-secondary:before,
  .opal-button-animation-bg-3 .button-outline-secondary:before,
  .opal-button-animation-bg-3 .button-primary:before,
  .opal-button-animation-bg-3 .button-outline-primary:before,
  .opal-button-animation-bg-3 .search-submit:before,
  .opal-button-animation-bg-3 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-3 .button-outline-secondary:before,
  .opal-button-animation-bg-3 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-3 .button-secondary:hover:before, .opal-button-animation-bg-3 .button-secondary:focus:before, .opal-button-animation-bg-3 .button-secondary:active:before,
  .opal-button-animation-bg-3 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-3 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-3 .button-outline-secondary:active:before,
  .opal-button-animation-bg-3 .button-primary:hover:before,
  .opal-button-animation-bg-3 .button-primary:focus:before,
  .opal-button-animation-bg-3 .button-primary:active:before,
  .opal-button-animation-bg-3 .button-outline-primary:hover:before,
  .opal-button-animation-bg-3 .button-outline-primary:focus:before,
  .opal-button-animation-bg-3 .button-outline-primary:active:before,
  .opal-button-animation-bg-3 .search-submit:hover:before,
  .opal-button-animation-bg-3 .search-submit:focus:before,
  .opal-button-animation-bg-3 .search-submit:active:before,
  .opal-button-animation-bg-3 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-3 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-3 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1); }
CSS;
    //========================================================================
    // Animation 4
    //========================================================================
    case 4:
        return <<<CSS
.opal-button-animation-bg-4 .button-secondary,
.opal-button-animation-bg-4 .button-outline-secondary,
.opal-button-animation-bg-4 .button-primary,
.opal-button-animation-bg-4 .button-outline-primary,
.opal-button-animation-bg-4 .search-submit,
.opal-button-animation-bg-4 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-4 .button-secondary:before,
  .opal-button-animation-bg-4 .button-outline-secondary:before,
  .opal-button-animation-bg-4 .button-primary:before,
  .opal-button-animation-bg-4 .button-outline-primary:before,
  .opal-button-animation-bg-4 .search-submit:before,
  .opal-button-animation-bg-4 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-4 .button-outline-secondary:before,
  .opal-button-animation-bg-4 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-4 .button-secondary:hover:before, .opal-button-animation-bg-4 .button-secondary:focus:before, .opal-button-animation-bg-4 .button-secondary:active:before,
  .opal-button-animation-bg-4 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-4 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-4 .button-outline-secondary:active:before,
  .opal-button-animation-bg-4 .button-primary:hover:before,
  .opal-button-animation-bg-4 .button-primary:focus:before,
  .opal-button-animation-bg-4 .button-primary:active:before,
  .opal-button-animation-bg-4 .button-outline-primary:hover:before,
  .opal-button-animation-bg-4 .button-outline-primary:focus:before,
  .opal-button-animation-bg-4 .button-outline-primary:active:before,
  .opal-button-animation-bg-4 .search-submit:hover:before,
  .opal-button-animation-bg-4 .search-submit:focus:before,
  .opal-button-animation-bg-4 .search-submit:active:before,
  .opal-button-animation-bg-4 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-4 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-4 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1); }
CSS;
    //========================================================================
    // Animation 5
    //========================================================================
    case 5:
        return <<<CSS
.opal-button-animation-bg-5 .button-secondary,
.opal-button-animation-bg-5 .button-outline-secondary,
.opal-button-animation-bg-5 .button-primary,
.opal-button-animation-bg-5 .button-outline-primary,
.opal-button-animation-bg-5 .search-submit,
.opal-button-animation-bg-5 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-5 .button-secondary:before,
  .opal-button-animation-bg-5 .button-outline-secondary:before,
  .opal-button-animation-bg-5 .button-primary:before,
  .opal-button-animation-bg-5 .button-outline-primary:before,
  .opal-button-animation-bg-5 .search-submit:before,
  .opal-button-animation-bg-5 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-5 .button-outline-secondary:before,
  .opal-button-animation-bg-5 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-5 .button-secondary:hover:before, .opal-button-animation-bg-5 .button-secondary:focus:before, .opal-button-animation-bg-5 .button-secondary:active:before,
  .opal-button-animation-bg-5 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-5 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-5 .button-outline-secondary:active:before,
  .opal-button-animation-bg-5 .button-primary:hover:before,
  .opal-button-animation-bg-5 .button-primary:focus:before,
  .opal-button-animation-bg-5 .button-primary:active:before,
  .opal-button-animation-bg-5 .button-outline-primary:hover:before,
  .opal-button-animation-bg-5 .button-outline-primary:focus:before,
  .opal-button-animation-bg-5 .button-outline-primary:active:before,
  .opal-button-animation-bg-5 .search-submit:hover:before,
  .opal-button-animation-bg-5 .search-submit:focus:before,
  .opal-button-animation-bg-5 .search-submit:active:before,
  .opal-button-animation-bg-5 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-5 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-5 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
CSS;
    //========================================================================
    // Animation 6
    //========================================================================
    case 6:
        return <<<CSS
.opal-button-animation-bg-6 .button-secondary,
.opal-button-animation-bg-6 .button-outline-secondary,
.opal-button-animation-bg-6 .button-primary,
.opal-button-animation-bg-6 .button-outline-primary,
.opal-button-animation-bg-6 .search-submit,
.opal-button-animation-bg-6 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-6 .button-secondary:before,
  .opal-button-animation-bg-6 .button-outline-secondary:before,
  .opal-button-animation-bg-6 .button-primary:before,
  .opal-button-animation-bg-6 .button-outline-primary:before,
  .opal-button-animation-bg-6 .search-submit:before,
  .opal-button-animation-bg-6 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-6 .button-outline-secondary:before,
  .opal-button-animation-bg-6 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-6 .button-secondary:hover:before, .opal-button-animation-bg-6 .button-secondary:focus:before, .opal-button-animation-bg-6 .button-secondary:active:before,
  .opal-button-animation-bg-6 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-6 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-6 .button-outline-secondary:active:before,
  .opal-button-animation-bg-6 .button-primary:hover:before,
  .opal-button-animation-bg-6 .button-primary:focus:before,
  .opal-button-animation-bg-6 .button-primary:active:before,
  .opal-button-animation-bg-6 .button-outline-primary:hover:before,
  .opal-button-animation-bg-6 .button-outline-primary:focus:before,
  .opal-button-animation-bg-6 .button-outline-primary:active:before,
  .opal-button-animation-bg-6 .search-submit:hover:before,
  .opal-button-animation-bg-6 .search-submit:focus:before,
  .opal-button-animation-bg-6 .search-submit:active:before,
  .opal-button-animation-bg-6 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-6 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-6 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }

CSS;
    case 7:
        return <<<CSS
    .opal-button-animation-bg-7 .button-secondary,
.opal-button-animation-bg-7 .button-outline-secondary,
.opal-button-animation-bg-7 .button-primary,
.opal-button-animation-bg-7 .button-outline-primary,
.opal-button-animation-bg-7 .search-submit,
.opal-button-animation-bg-7 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  .opal-button-animation-bg-7 .button-secondary:before,
  .opal-button-animation-bg-7 .button-outline-secondary:before,
  .opal-button-animation-bg-7 .button-primary:before,
  .opal-button-animation-bg-7 .button-outline-primary:before,
  .opal-button-animation-bg-7 .search-submit:before,
  .opal-button-animation-bg-7 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-7 .button-outline-secondary:before,
  .opal-button-animation-bg-7 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-7 .button-secondary:hover:before, .opal-button-animation-bg-7 .button-secondary:focus:before, .opal-button-animation-bg-7 .button-secondary:active:before,
  .opal-button-animation-bg-7 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-7 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-7 .button-outline-secondary:active:before,
  .opal-button-animation-bg-7 .button-primary:hover:before,
  .opal-button-animation-bg-7 .button-primary:focus:before,
  .opal-button-animation-bg-7 .button-primary:active:before,
  .opal-button-animation-bg-7 .button-outline-primary:hover:before,
  .opal-button-animation-bg-7 .button-outline-primary:focus:before,
  .opal-button-animation-bg-7 .button-outline-primary:active:before,
  .opal-button-animation-bg-7 .search-submit:hover:before,
  .opal-button-animation-bg-7 .search-submit:focus:before,
  .opal-button-animation-bg-7 .search-submit:active:before,
  .opal-button-animation-bg-7 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-7 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-7 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }

CSS;
    //========================================================================
    // Animation 8
    //========================================================================
    case 8:
        return <<<CSS
.opal-button-animation-bg-8 .button-secondary,
.opal-button-animation-bg-8 .button-outline-secondary,
.opal-button-animation-bg-8 .button-primary,
.opal-button-animation-bg-8 .button-outline-primary,
.opal-button-animation-bg-8 .search-submit,
.opal-button-animation-bg-8 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  .opal-button-animation-bg-8 .button-secondary:before,
  .opal-button-animation-bg-8 .button-outline-secondary:before,
  .opal-button-animation-bg-8 .button-primary:before,
  .opal-button-animation-bg-8 .button-outline-primary:before,
  .opal-button-animation-bg-8 .search-submit:before,
  .opal-button-animation-bg-8 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-8 .button-outline-secondary:before,
  .opal-button-animation-bg-8 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-8 .button-secondary:hover:before, .opal-button-animation-bg-8 .button-secondary:focus:before, .opal-button-animation-bg-8 .button-secondary:active:before,
  .opal-button-animation-bg-8 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-8 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-8 .button-outline-secondary:active:before,
  .opal-button-animation-bg-8 .button-primary:hover:before,
  .opal-button-animation-bg-8 .button-primary:focus:before,
  .opal-button-animation-bg-8 .button-primary:active:before,
  .opal-button-animation-bg-8 .button-outline-primary:hover:before,
  .opal-button-animation-bg-8 .button-outline-primary:focus:before,
  .opal-button-animation-bg-8 .button-outline-primary:active:before,
  .opal-button-animation-bg-8 .search-submit:hover:before,
  .opal-button-animation-bg-8 .search-submit:focus:before,
  .opal-button-animation-bg-8 .search-submit:active:before,
  .opal-button-animation-bg-8 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-8 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-8 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }

CSS;
    //========================================================================
    // Animation 9
    //========================================================================
    case 9:
        return <<<CSS
.opal-button-animation-bg-9 .button-secondary,
.opal-button-animation-bg-9 .button-outline-secondary,
.opal-button-animation-bg-9 .button-primary,
.opal-button-animation-bg-9 .button-outline-primary,
.opal-button-animation-bg-9 .search-submit,
.opal-button-animation-bg-9 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  .opal-button-animation-bg-9 .button-secondary:before,
  .opal-button-animation-bg-9 .button-outline-secondary:before,
  .opal-button-animation-bg-9 .button-primary:before,
  .opal-button-animation-bg-9 .button-outline-primary:before,
  .opal-button-animation-bg-9 .search-submit:before,
  .opal-button-animation-bg-9 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-9 .button-outline-secondary:before,
  .opal-button-animation-bg-9 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-9 .button-secondary:hover:before, .opal-button-animation-bg-9 .button-secondary:focus:before, .opal-button-animation-bg-9 .button-secondary:active:before,
  .opal-button-animation-bg-9 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-9 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-9 .button-outline-secondary:active:before,
  .opal-button-animation-bg-9 .button-primary:hover:before,
  .opal-button-animation-bg-9 .button-primary:focus:before,
  .opal-button-animation-bg-9 .button-primary:active:before,
  .opal-button-animation-bg-9 .button-outline-primary:hover:before,
  .opal-button-animation-bg-9 .button-outline-primary:focus:before,
  .opal-button-animation-bg-9 .button-outline-primary:active:before,
  .opal-button-animation-bg-9 .search-submit:hover:before,
  .opal-button-animation-bg-9 .search-submit:focus:before,
  .opal-button-animation-bg-9 .search-submit:active:before,
  .opal-button-animation-bg-9 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-9 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-9 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }
CSS;
    //========================================================================
    // Animation 10
    //========================================================================
    case 10:
        return <<<CSS
.opal-button-animation-bg-10 .button-secondary,
.opal-button-animation-bg-10 .button-outline-secondary,
.opal-button-animation-bg-10 .button-primary,
.opal-button-animation-bg-10 .button-outline-primary,
.opal-button-animation-bg-10 .search-submit,
.opal-button-animation-bg-10 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  .opal-button-animation-bg-10 .button-secondary:before,
  .opal-button-animation-bg-10 .button-outline-secondary:before,
  .opal-button-animation-bg-10 .button-primary:before,
  .opal-button-animation-bg-10 .button-outline-primary:before,
  .opal-button-animation-bg-10 .search-submit:before,
  .opal-button-animation-bg-10 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-10 .button-outline-secondary:before,
  .opal-button-animation-bg-10 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-10 .button-secondary:hover:before, .opal-button-animation-bg-10 .button-secondary:focus:before, .opal-button-animation-bg-10 .button-secondary:active:before,
  .opal-button-animation-bg-10 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-10 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-10 .button-outline-secondary:active:before,
  .opal-button-animation-bg-10 .button-primary:hover:before,
  .opal-button-animation-bg-10 .button-primary:focus:before,
  .opal-button-animation-bg-10 .button-primary:active:before,
  .opal-button-animation-bg-10 .button-outline-primary:hover:before,
  .opal-button-animation-bg-10 .button-outline-primary:focus:before,
  .opal-button-animation-bg-10 .button-outline-primary:active:before,
  .opal-button-animation-bg-10 .search-submit:hover:before,
  .opal-button-animation-bg-10 .search-submit:focus:before,
  .opal-button-animation-bg-10 .search-submit:active:before,
  .opal-button-animation-bg-10 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-10 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-10 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }
CSS;
    //========================================================================
    // Animation 11
    //========================================================================
    case 11:
        return <<<CSS
.opal-button-animation-bg-11 .button-secondary,
.opal-button-animation-bg-11 .button-outline-secondary,
.opal-button-animation-bg-11 .button-primary,
.opal-button-animation-bg-11 .button-outline-primary,
.opal-button-animation-bg-11 .search-submit,
.opal-button-animation-bg-11 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  overflow: hidden;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-11 .button-secondary:before,
  .opal-button-animation-bg-11 .button-outline-secondary:before,
  .opal-button-animation-bg-11 .button-primary:before,
  .opal-button-animation-bg-11 .button-outline-primary:before,
  .opal-button-animation-bg-11 .search-submit:before,
  .opal-button-animation-bg-11 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    border-radius: 100%;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-11 .button-outline-secondary:before,
  .opal-button-animation-bg-11 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-11 .button-secondary:hover:before, .opal-button-animation-bg-11 .button-secondary:focus:before, .opal-button-animation-bg-11 .button-secondary:active:before,
  .opal-button-animation-bg-11 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-11 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-11 .button-outline-secondary:active:before,
  .opal-button-animation-bg-11 .button-primary:hover:before,
  .opal-button-animation-bg-11 .button-primary:focus:before,
  .opal-button-animation-bg-11 .button-primary:active:before,
  .opal-button-animation-bg-11 .button-outline-primary:hover:before,
  .opal-button-animation-bg-11 .button-outline-primary:focus:before,
  .opal-button-animation-bg-11 .button-outline-primary:active:before,
  .opal-button-animation-bg-11 .search-submit:hover:before,
  .opal-button-animation-bg-11 .search-submit:focus:before,
  .opal-button-animation-bg-11 .search-submit:active:before,
  .opal-button-animation-bg-11 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-11 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-11 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scale(2);
    transform: scale(2); }
CSS;
    //========================================================================
    // Animation 12
    //========================================================================
    case 12:
        return <<<CSS
.opal-button-animation-bg-12 .button-secondary,
.opal-button-animation-bg-12 .button-outline-secondary,
.opal-button-animation-bg-12 .button-primary,
.opal-button-animation-bg-12 .button-outline-primary,
.opal-button-animation-bg-12 .search-submit,
.opal-button-animation-bg-12 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  overflow: hidden;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-12 .button-secondary:before,
  .opal-button-animation-bg-12 .button-outline-secondary:before,
  .opal-button-animation-bg-12 .button-primary:before,
  .opal-button-animation-bg-12 .button-outline-primary:before,
  .opal-button-animation-bg-12 .search-submit:before,
  .opal-button-animation-bg-12 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    border-radius: 100%;
    -webkit-transform: scale(2);
    transform: scale(2);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-12 .button-outline-secondary:before,
  .opal-button-animation-bg-12 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-12 .button-secondary:hover:before, .opal-button-animation-bg-12 .button-secondary:focus:before, .opal-button-animation-bg-12 .button-secondary:active:before,
  .opal-button-animation-bg-12 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-12 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-12 .button-outline-secondary:active:before,
  .opal-button-animation-bg-12 .button-primary:hover:before,
  .opal-button-animation-bg-12 .button-primary:focus:before,
  .opal-button-animation-bg-12 .button-primary:active:before,
  .opal-button-animation-bg-12 .button-outline-primary:hover:before,
  .opal-button-animation-bg-12 .button-outline-primary:focus:before,
  .opal-button-animation-bg-12 .button-outline-primary:active:before,
  .opal-button-animation-bg-12 .search-submit:hover:before,
  .opal-button-animation-bg-12 .search-submit:focus:before,
  .opal-button-animation-bg-12 .search-submit:active:before,
  .opal-button-animation-bg-12 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-12 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-12 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scale(0);
    transform: scale(0); }

CSS;
    //========================================================================
    // Animation 13
    //========================================================================
    case 13:
        return <<<CSS
.opal-button-animation-bg-13 .button-secondary,
.opal-button-animation-bg-13 .button-outline-secondary,
.opal-button-animation-bg-13 .button-primary,
.opal-button-animation-bg-13 .button-outline-primary,
.opal-button-animation-bg-13 .search-submit,
.opal-button-animation-bg-13 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-13 .button-secondary:before,
  .opal-button-animation-bg-13 .button-outline-secondary:before,
  .opal-button-animation-bg-13 .button-primary:before,
  .opal-button-animation-bg-13 .button-outline-primary:before,
  .opal-button-animation-bg-13 .search-submit:before,
  .opal-button-animation-bg-13 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-13 .button-outline-secondary:before,
  .opal-button-animation-bg-13 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-13 .button-secondary:hover:before, .opal-button-animation-bg-13 .button-secondary:focus:before, .opal-button-animation-bg-13 .button-secondary:active:before,
  .opal-button-animation-bg-13 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-13 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-13 .button-outline-secondary:active:before,
  .opal-button-animation-bg-13 .button-primary:hover:before,
  .opal-button-animation-bg-13 .button-primary:focus:before,
  .opal-button-animation-bg-13 .button-primary:active:before,
  .opal-button-animation-bg-13 .button-outline-primary:hover:before,
  .opal-button-animation-bg-13 .button-outline-primary:focus:before,
  .opal-button-animation-bg-13 .button-outline-primary:active:before,
  .opal-button-animation-bg-13 .search-submit:hover:before,
  .opal-button-animation-bg-13 .search-submit:focus:before,
  .opal-button-animation-bg-13 .search-submit:active:before,
  .opal-button-animation-bg-13 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-13 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-13 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scale(0);
    transform: scale(0); }

CSS;
    //========================================================================
    // Animation 14
    //========================================================================
    case 14:
        return <<<CSS
.opal-button-animation-bg-14 .button-secondary,
.opal-button-animation-bg-14 .button-outline-secondary,
.opal-button-animation-bg-14 .button-primary,
.opal-button-animation-bg-14 .button-outline-primary,
.opal-button-animation-bg-14 .search-submit,
.opal-button-animation-bg-14 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-14 .button-secondary:before,
  .opal-button-animation-bg-14 .button-outline-secondary:before,
  .opal-button-animation-bg-14 .button-primary:before,
  .opal-button-animation-bg-14 .button-outline-primary:before,
  .opal-button-animation-bg-14 .search-submit:before,
  .opal-button-animation-bg-14 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-14 .button-outline-secondary:before,
  .opal-button-animation-bg-14 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-14 .button-secondary:hover:before, .opal-button-animation-bg-14 .button-secondary:focus:before, .opal-button-animation-bg-14 .button-secondary:active:before,
  .opal-button-animation-bg-14 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-14 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-14 .button-outline-secondary:active:before,
  .opal-button-animation-bg-14 .button-primary:hover:before,
  .opal-button-animation-bg-14 .button-primary:focus:before,
  .opal-button-animation-bg-14 .button-primary:active:before,
  .opal-button-animation-bg-14 .button-outline-primary:hover:before,
  .opal-button-animation-bg-14 .button-outline-primary:focus:before,
  .opal-button-animation-bg-14 .button-outline-primary:active:before,
  .opal-button-animation-bg-14 .search-submit:hover:before,
  .opal-button-animation-bg-14 .search-submit:focus:before,
  .opal-button-animation-bg-14 .search-submit:active:before,
  .opal-button-animation-bg-14 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-14 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-14 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scale(1);
    transform: scale(1); }
CSS;
    //========================================================================
    // Animation 15
    //========================================================================
    case 15:
        return <<<CSS
    .opal-button-animation-bg-15 .button-secondary,
.opal-button-animation-bg-15 .button-outline-secondary,
.opal-button-animation-bg-15 .button-primary,
.opal-button-animation-bg-15 .button-outline-primary,
.opal-button-animation-bg-15 .search-submit,
.opal-button-animation-bg-15 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-15 .button-secondary:before,
  .opal-button-animation-bg-15 .button-outline-secondary:before,
  .opal-button-animation-bg-15 .button-primary:before,
  .opal-button-animation-bg-15 .button-outline-primary:before,
  .opal-button-animation-bg-15 .search-submit:before,
  .opal-button-animation-bg-15 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-15 .button-outline-secondary:before,
  .opal-button-animation-bg-15 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-15 .button-secondary:hover:before, .opal-button-animation-bg-15 .button-secondary:focus:before, .opal-button-animation-bg-15 .button-secondary:active:before,
  .opal-button-animation-bg-15 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-15 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-15 .button-outline-secondary:active:before,
  .opal-button-animation-bg-15 .button-primary:hover:before,
  .opal-button-animation-bg-15 .button-primary:focus:before,
  .opal-button-animation-bg-15 .button-primary:active:before,
  .opal-button-animation-bg-15 .button-outline-primary:hover:before,
  .opal-button-animation-bg-15 .button-outline-primary:focus:before,
  .opal-button-animation-bg-15 .button-outline-primary:active:before,
  .opal-button-animation-bg-15 .search-submit:hover:before,
  .opal-button-animation-bg-15 .search-submit:focus:before,
  .opal-button-animation-bg-15 .search-submit:active:before,
  .opal-button-animation-bg-15 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-15 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-15 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(0);
    transform: scaleX(0); }
CSS;
    //========================================================================
    // Animation 16
    //========================================================================
    case 16:
        return <<<CSS
.opal-button-animation-bg-16 .button-secondary,
.opal-button-animation-bg-16 .button-outline-secondary,
.opal-button-animation-bg-16 .button-primary,
.opal-button-animation-bg-16 .button-outline-primary,
.opal-button-animation-bg-16 .search-submit,
.opal-button-animation-bg-16 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-16 .button-secondary:before,
  .opal-button-animation-bg-16 .button-outline-secondary:before,
  .opal-button-animation-bg-16 .button-primary:before,
  .opal-button-animation-bg-16 .button-outline-primary:before,
  .opal-button-animation-bg-16 .search-submit:before,
  .opal-button-animation-bg-16 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-16 .button-outline-secondary:before,
  .opal-button-animation-bg-16 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-16 .button-secondary:hover:before, .opal-button-animation-bg-16 .button-secondary:focus:before, .opal-button-animation-bg-16 .button-secondary:active:before,
  .opal-button-animation-bg-16 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-16 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-16 .button-outline-secondary:active:before,
  .opal-button-animation-bg-16 .button-primary:hover:before,
  .opal-button-animation-bg-16 .button-primary:focus:before,
  .opal-button-animation-bg-16 .button-primary:active:before,
  .opal-button-animation-bg-16 .button-outline-primary:hover:before,
  .opal-button-animation-bg-16 .button-outline-primary:focus:before,
  .opal-button-animation-bg-16 .button-outline-primary:active:before,
  .opal-button-animation-bg-16 .search-submit:hover:before,
  .opal-button-animation-bg-16 .search-submit:focus:before,
  .opal-button-animation-bg-16 .search-submit:active:before,
  .opal-button-animation-bg-16 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-16 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-16 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1); }
CSS;
    //========================================================================
    // Animation 17
    //========================================================================
    case 17:
        return <<<CSS
.opal-button-animation-bg-17 .button-secondary,
.opal-button-animation-bg-17 .button-outline-secondary,
.opal-button-animation-bg-17 .button-primary,
.opal-button-animation-bg-17 .button-outline-primary,
.opal-button-animation-bg-17 .search-submit,
.opal-button-animation-bg-17 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-17 .button-secondary:before,
  .opal-button-animation-bg-17 .button-outline-secondary:before,
  .opal-button-animation-bg-17 .button-primary:before,
  .opal-button-animation-bg-17 .button-outline-primary:before,
  .opal-button-animation-bg-17 .search-submit:before,
  .opal-button-animation-bg-17 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-17 .button-outline-secondary:before,
  .opal-button-animation-bg-17 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-17 .button-secondary:hover:before, .opal-button-animation-bg-17 .button-secondary:focus:before, .opal-button-animation-bg-17 .button-secondary:active:before,
  .opal-button-animation-bg-17 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-17 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-17 .button-outline-secondary:active:before,
  .opal-button-animation-bg-17 .button-primary:hover:before,
  .opal-button-animation-bg-17 .button-primary:focus:before,
  .opal-button-animation-bg-17 .button-primary:active:before,
  .opal-button-animation-bg-17 .button-outline-primary:hover:before,
  .opal-button-animation-bg-17 .button-outline-primary:focus:before,
  .opal-button-animation-bg-17 .button-outline-primary:active:before,
  .opal-button-animation-bg-17 .search-submit:hover:before,
  .opal-button-animation-bg-17 .search-submit:focus:before,
  .opal-button-animation-bg-17 .search-submit:active:before,
  .opal-button-animation-bg-17 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-17 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-17 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(0);
    transform: scaleY(0); }
CSS;
    //========================================================================
    // Animation 18
    //========================================================================
    case 18:
        return <<<CSS
.opal-button-animation-bg-18 .button-secondary,
.opal-button-animation-bg-18 .button-outline-secondary,
.opal-button-animation-bg-18 .button-primary,
.opal-button-animation-bg-18 .button-outline-primary,
.opal-button-animation-bg-18 .search-submit,
.opal-button-animation-bg-18 .entry-footer .edit-link a.post-edit-link {
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .opal-button-animation-bg-18 .button-secondary:before,
  .opal-button-animation-bg-18 .button-outline-secondary:before,
  .opal-button-animation-bg-18 .button-primary:before,
  .opal-button-animation-bg-18 .button-outline-primary:before,
  .opal-button-animation-bg-18 .search-submit:before,
  .opal-button-animation-bg-18 .entry-footer .edit-link a.post-edit-link:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  .opal-button-animation-bg-4 .button-outline-secondary:before,
  .opal-button-animation-bg-4 .button-outline-primary:before {
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;}
  .opal-button-animation-bg-18 .button-secondary:hover:before, .opal-button-animation-bg-18 .button-secondary:focus:before, .opal-button-animation-bg-18 .button-secondary:active:before,
  .opal-button-animation-bg-18 .button-outline-secondary:hover:before,
  .opal-button-animation-bg-18 .button-outline-secondary:focus:before,
  .opal-button-animation-bg-18 .button-outline-secondary:active:before,
  .opal-button-animation-bg-18 .button-primary:hover:before,
  .opal-button-animation-bg-18 .button-primary:focus:before,
  .opal-button-animation-bg-18 .button-primary:active:before,
  .opal-button-animation-bg-18 .button-outline-primary:hover:before,
  .opal-button-animation-bg-18 .button-outline-primary:focus:before,
  .opal-button-animation-bg-18 .button-outline-primary:active:before,
  .opal-button-animation-bg-18 .search-submit:hover:before,
  .opal-button-animation-bg-18 .search-submit:focus:before,
  .opal-button-animation-bg-18 .search-submit:active:before,
  .opal-button-animation-bg-18 .entry-footer .edit-link a.post-edit-link:hover:before,
  .opal-button-animation-bg-18 .entry-footer .edit-link a.post-edit-link:focus:before,
  .opal-button-animation-bg-18 .entry-footer .edit-link a.post-edit-link:active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
CSS;
    default:
        return '';

}

