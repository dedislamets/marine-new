<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
        <title>Marine Business</title>
        <meta name="description" content="Marine Business">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="Marine Business, Marine, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= base_url(); ?>assets/img/favicon.png" rel="shortcut icon" /> 
        <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"/> -->
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='<?= base_url(); ?>assets/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/color-default.css"/><!-- template main color -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker3.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-datetimepicker.min.css"/>        
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dropzone.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-table.min.css">
        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font icons -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/>
        <!-- Fontawesome icons css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/style-switcher/styleSwitcher.css"/><!-- styleswitcher -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/basic.min.css">   
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css">  
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/thickbox.css">
        <style type="text/css">
            .service-item-container figcaption h3 {
                text-align: center;
                text-transform: uppercase;
                color: #e5ea10;
                position: relative;
                padding-bottom: 15px;
                margin-bottom: 0;
                text-shadow: -1px 0 #796969, 0 2px #796969, 2px 0 #796969, 0 -2px #796969;
            }
          .notif-header {
              padding-left: 29px !important;
              padding-bottom: 10px !important;
              font-weight: 600;
          }
          .notif-li {
            /*min-width: 219px;*/
            padding: 0;
          }
          .notif-li>li {
            padding: 0px;
            background-color: #f8f8f8;
            cursor: pointer;
            border-bottom: solid 1px gray;
          }
          
          
          #frame {
            max-height: 300px;
              background: #E6EAEA;
              bottom: 0;
              position: fixed;
              float: right;
              margin-left: 10px;
              margin-bottom: 0;
              right: 0;
              z-index: 1000;
          }
          @media screen and (max-width: 360px) {
            #frame {
              width: 100%;
              /*height: 100vh;*/
            }
          }

        .dropdown-menu>li>a:hover {
          color: #000;
        }

          #frame #sidepanel {
            min-width: 280px;
            float: left;
            max-width: 340px;
            width: 40%;
            height: 100%;
            background: #2c3e50;
            color: #f5f5f5;
            overflow: hidden;
            position: relative;
          }
          .service-item-container figcaption {
                top: 84px;
            }
          @media screen and (max-width: 735px) {
            #frame #sidepanel {
              width: 58px;
              min-width: 58px;    
            }
            .service-item-container figcaption {
                top: 37px;
            }
          }
          #frame #sidepanel #profile {
            width: 80%;
            margin: 5px auto;
            border-bottom: solid 1px;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile {
              width: 100%;
              margin: 0 auto;
              padding: 5px 0 0 0;
              background: #32465a;
            }
          }
          #frame #sidepanel #profile.expanded .wrap {
            height: 210px;
            line-height: initial;
          }
          #frame #sidepanel #profile.expanded .wrap p {
            margin-top: 20px;
          }
          #frame #sidepanel #profile.expanded .wrap i.expand-button {
            -moz-transform: scaleY(-1);
            -o-transform: scaleY(-1);
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
          }
          #frame #sidepanel #profile .wrap {
            height: 49px;
            line-height: 60px;
            overflow: hidden;
            -moz-transition: 0.3s height ease;
            -o-transition: 0.3s height ease;
            -webkit-transition: 0.3s height ease;
            transition: 0.3s height ease;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap {
              height: 55px;
            }
          }
          #frame #sidepanel #profile .wrap img {
            width: 44px;
            border-radius: 50%;
            padding: 3px;
            border: 2px solid #e74c3c;
            height: 45px;
            float: left;
            cursor: pointer;
            -moz-transition: 0.3s border ease;
            -o-transition: 0.3s border ease;
            -webkit-transition: 0.3s border ease;
            transition: 0.3s border ease;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap img {
              width: 40px;    
              margin-left: 9px;
              margin-top: 6px;
            }
            #profile-img {
              display: none;
            }
          }
          #frame #sidepanel #profile .wrap img.online {
            border: 2px solid #2ecc71;
          }
          #frame #sidepanel #profile .wrap img.away {
            border: 2px solid #f1c40f;
          }
          #frame #sidepanel #profile .wrap img.busy {
            border: 2px solid #e74c3c;
          }
          #frame #sidepanel #profile .wrap img.offline {
            border: 2px solid #95a5a6;
          }
          #frame #sidepanel #profile .wrap p {
            float: left;
              margin-left: 15px;
              text-align: left;
              padding-top: 14px;
              padding-bottom: 0;
              color: #fff;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap p {
              display: none;
            }
          }
          #frame #sidepanel #profile .wrap i.expand-button {
            float: right;
            margin-top: 23px;
            font-size: 0.8em;
            cursor: pointer;
            color: #435f7a;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap i.expand-button {
              font-size: 25px;
              margin-top: 10px;
              float: none;
              padding-left: 19px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options {
            position: absolute;
            opacity: 0;
            visibility: hidden;
            width: 150px;
            margin: 70px 0 0 0;
            border-radius: 6px;
            z-index: 99;
            line-height: initial;
            background: #435f7a;
            -moz-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            transition: 0.3s all ease;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options {
              width: 58px;
              margin-top: 57px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options.active {
            opacity: 1;
            visibility: visible;
            margin: 75px 0 0 0;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options.active {
              margin-top: 62px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 8px solid #435f7a;
            margin: -8px 0 0 24px;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options:before {
              margin-left: 23px;
            }
          }

          @media only screen and (max-width: 479px) and (min-width: 320px) {
            .dl-menuwrapper {
                max-width: 115px;                
            }
          }
          #frame #sidepanel #profile .wrap #status-options ul {
            overflow: hidden;
            border-radius: 6px;
          }
          #frame #sidepanel #profile .wrap #status-options ul li {
            padding: 15px 0 30px 18px;
            display: block;
            cursor: pointer;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li {
              padding: 15px 0 35px 22px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options ul li:hover {
            background: #496886;
          }
          #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 5px 0 0 0;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
              width: 14px;
              height: 14px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            margin: -3px 0 0 -3px;
            background: transparent;
            border-radius: 50%;
            z-index: 0;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
              height: 18px;
              width: 18px;
            }
          }
          #frame #sidepanel #profile .wrap #status-options ul li p {
            padding-left: 12px;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li p {
              display: none;
            }
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
            background: #2ecc71;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
            border: 1px solid #2ecc71;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
            background: #f1c40f;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
            border: 1px solid #f1c40f;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
            background: #e74c3c;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
            border: 1px solid #e74c3c;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
            background: #95a5a6;
          }
          #frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
            border: 1px solid #95a5a6;
          }
          #frame #sidepanel #profile .wrap #expanded {
            padding: 100px 0 0 0;
            display: block;
            line-height: initial !important;
          }
          #frame #sidepanel #profile .wrap #expanded label {
            float: left;
            clear: both;
            margin: 0 8px 5px 0;
            padding: 5px 0;
          }
          #frame #sidepanel #profile .wrap #expanded input {
            border: none;
            margin-bottom: 6px;
            background: #32465a;
            border-radius: 3px;
            color: #f5f5f5;
            padding: 7px;
            width: calc(100% - 43px);
          }
          #frame #sidepanel #profile .wrap #expanded input:focus {
            outline: none;
            background: #435f7a;
          }
          #frame #sidepanel #search-chat {
            border-top: 1px solid #32465a;
            border-bottom: 1px solid #32465a;
            font-weight: 300;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #search-chat {
              display: none;
            }
          }
          #frame #sidepanel #search-chat label {
            position: absolute;
            margin: 10px 0 0 20px;
          }
          #frame #sidepanel #search-chat input {
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
            padding: 10px 0 10px 46px;
            width: calc(100% - 25px);
            border: none;
            background: #32465a;
            color: #f5f5f5;
          }
          #frame #sidepanel #search-chat input:focus {
            outline: none;
            background: #435f7a;
          }
          #frame #sidepanel #search-chat input::-webkit-input-placeholder {
            color: #f5f5f5;
          }
          #frame #sidepanel #search-chat input::-moz-placeholder {
            color: #f5f5f5;
          }
          #frame #sidepanel #search-chat input:-ms-input-placeholder {
            color: #f5f5f5;
          }
          #frame #sidepanel #search-chat input:-moz-placeholder {
            color: #f5f5f5;
          }
          #frame #sidepanel #contacts {
            /*height: calc(100% - 177px);*/
            height:230px;
            overflow-y: scroll;
            overflow-x: hidden;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts {
              height: 240px;
              overflow-y: scroll;
              overflow-x: hidden;
            }
            #frame #sidepanel #contacts::-webkit-scrollbar {
              display: none;
            }
          }
          #frame #sidepanel #contacts.expanded {
            height: calc(100% - 334px);
          }
          #frame #sidepanel #contacts::-webkit-scrollbar {
            width: 8px;
            background: #2c3e50;
          }
          #frame #sidepanel #contacts::-webkit-scrollbar-thumb {
            background-color: #243140;
          }
          #frame #sidepanel #contacts ul {
              list-style: none;
          }
          #frame #sidepanel #contacts ul li.contact {
            position: relative;
            padding: 5px 0 10px 0;
            font-size: 0.9em;
            cursor: pointer;
          }
          @media screen and (max-width: 735px) {  
            #frame #sidepanel #contacts ul li.contact {
              padding: 6px 0 0 8px;
            }
          }
          #frame #sidepanel #contacts ul li.contact:hover {
            background: #32465a;
          }
          #frame #sidepanel #contacts ul li.contact.active {
            background: #32465a;
            border-right: 5px solid #435f7a;
          }
          #frame #sidepanel #contacts ul li.contact.active span.contact-status {
            border: 2px solid #32465a !important;
          }
          #frame #sidepanel #contacts ul li.contact .wrap {
            width: 88%;
            margin: 0 auto;
            position: relative;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap {
              width: 100%;
            }
          }
          #frame #sidepanel #contacts ul li.contact .wrap span {
            position: absolute;
            left: 0;
            margin: -2px 0 0 -2px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #2c3e50;
            background: #95a5a6;
          }
          #frame #sidepanel #contacts ul li.contact .wrap span.online {
            background: #2ecc71;
          }
          #frame #sidepanel #contacts ul li.contact .wrap span.away {
            background: #f1c40f;
          }
          #frame #sidepanel #contacts ul li.contact .wrap span.busy {
            background: #e74c3c;
          }
          #frame #sidepanel #contacts ul li.contact .wrap img {
            width: 40px;
            border-radius: 50%;
            /*float: left;*/
            margin-right: 10px;
            display: inline;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap img {
              margin-right: 0px;
            }
          }
          #frame #sidepanel #contacts ul li.contact .wrap .meta-chat {
            /*padding: 5px 0 0 0;*/
            vertical-align: middle;
            position: absolute;
            padding-top: 10px;
            display: inline;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap .meta-chat {
              display: none;
            }
          }
          #frame #sidepanel #contacts ul li.contact .wrap .meta-chat .name {
            font-weight: 600;
            color:#fff;
            padding-bottom:0;
            display: inline;
          }
          #frame #sidepanel #contacts ul li.contact .wrap .meta-chat .preview {
            padding: 0 0 1px;
            font-weight: 400;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -moz-transition: 1s all ease;
            -o-transition: 1s all ease;
            -webkit-transition: 1s all ease;
            transition: 1s all ease;
            color:#fff;
            padding-bottom:0;
          }
          #frame #sidepanel #contacts ul li.contact .wrap .meta-chat .preview span {
            position: initial;
            border-radius: initial;
            background: none;
            border: none;
            padding: 0 2px 0 0;
            margin: 0 0 0 1px;
            opacity: .5;
          }
          #frame #sidepanel #bottom-bar {
            position: absolute;
            width: 100%;
            bottom: 0;
          }
          #frame #sidepanel #bottom-bar button {
            float: left;
            border: none;
            width: 50%;
            padding: 10px 0;
            background: #32465a;
            color: #f5f5f5;
            cursor: pointer;
            font-size: 0.85em;
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button {
              float: none;
              width: 100%;
              padding: 15px 0;
            }
          }
          #frame #sidepanel #bottom-bar button:focus {
            outline: none;
          }
          #frame #sidepanel #bottom-bar button:nth-child(1) {
            border-right: 1px solid #2c3e50;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button:nth-child(1) {
              border-right: none;
              border-bottom: 1px solid #2c3e50;
            }
          }
          #frame #sidepanel #bottom-bar button:hover {
            background: #435f7a;
          }
          #frame #sidepanel #bottom-bar button i {
            margin-right: 3px;
            font-size: 1em;
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button i {
              font-size: 1.3em;
            }
          }
          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button span {
              display: none;
            }
          }
          #frame .content {
            float: right;
            width: 60%;
            height: 100%;
            overflow: hidden;
            position: relative;
          }
          @media screen and (max-width: 735px) {
            #frame .content {
              width: calc(100% - 58px);
              min-width: 300px !important;
            }
          }
          @media screen and (min-width: 900px) {
            #frame .content {
              width: 320px;
            }
          }
          #frame .content .contact-profile {
            width: 100%;
            height: 60px;
            line-height: 60px;
            background: #2c3e50;
          }
          #frame .content .contact-profile img {
            width: 40px;
            border-radius: 50%;
            float: left;
            margin: 9px 12px 0 9px;
            height: 40px;
          }
          #frame .content .contact-profile p {
            float: left;
               text-align: left;
              padding-top: 17px;
              color: #fff;
              padding-bottom: 0;
              width: 150px;
          }
          #frame .content .contact-profile .social-media {
            float: right;
          }
          #frame .content .contact-profile .social-media i {
            margin-left: 14px;
            cursor: pointer;
          }
          #frame .content .contact-profile .social-media i:nth-last-child(1) {
            margin-right: 20px;
          }
          #frame .content .contact-profile .social-media i:hover {
            color: #435f7a;
          }
          #frame .content .messages-chat {
            height: 195px;
            /*min-height: 240px;
            max-height: 240px;*/
            overflow-y: scroll;
            overflow-x: hidden;
          }
          @media screen and (max-width: 735px) {
            #frame .content .messages-chat {
              /*max-height: calc(100% - 105px);*/
               height: 195px;
            }
          }
          #frame .content .messages-chat::-webkit-scrollbar {
            width: 8px;
            background: transparent;
          }
          #frame .content .messages-chat::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
          }
          #frame .content .messages-chat ul li {
            display: inline-block;
            clear: both;
            float: left;
            margin: 15px 15px 5px 15px;
            width: calc(100% - 25px);
            font-size: 0.9em;
          }
          #frame .content .messages-chat ul li:nth-last-child(1) {
            margin-bottom: 20px;
          }
          #frame .content .messages-chat ul li.sent img {
            margin: 6px 8px 0 0;
          }
          #frame .content .messages-chat ul li.sent p {
            background: #435f7a;
            color: #f5f5f5;
          }
          #frame .content .messages-chat ul li.replies img {
            float: right;
            margin: 6px 0 0 8px;
          }
          #frame .content .messages-chat ul li.replies p {
            background: #f5f5f5;
            float: right;
          }
          #frame .content .messages-chat ul li img {
            width: 22px;
            border-radius: 50%;
            float: left;
          }
          #frame .content .messages-chat ul li p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 205px;
            line-height: 130%;
          }
          @media screen and (min-width: 735px) {
            #frame .content .messages-chat ul li p {
              max-width: 300px;
            }
          }
          #frame .content .message-input {
            /*position: absolute;*/
            bottom: 0;
            width: 100%;
            z-index: 99;
          }
          #frame .content .message-input .wrap {
            position: relative;
          }
          #frame .content .message-input .wrap input {
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
            float: left;
            border: none;
            width: calc(100% - 50px);
            padding: 11px 32px 10px 8px;  
            color: #32465a;
          }
          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap input {
              padding: 15px 32px 16px 8px;
            }
          }
          #frame .content .message-input .wrap input:focus {
            outline: none;
          }
          #frame .content .message-input .wrap .attachment {
            position: absolute;
            right: 60px;
            z-index: 4;
            margin-top: 10px;
            font-size: 1.1em;
            color: #435f7a;
            opacity: .5;
            cursor: pointer;
          }
          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap .attachment {
              margin-top: 17px;
              right: 65px;
            }
          }
          #frame .content .message-input .wrap .attachment:hover {
            opacity: 1;
          }
          #frame .content .message-input .wrap button {
            float: right;
            border: none;
            width: 50px;
            padding: 12px 0;
            cursor: pointer;
            background: #32465a;
            color: #f5f5f5;
          }
          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap button {
              padding: 16px 0;
            }
          }
          #frame .content .message-input .wrap button:hover {
            background: #435f7a;
          }
          #frame .content .message-input .wrap button:focus {
            outline: none;
          }
            .meta>.text {                
                text-decoration: none;                
            }
            .label-tgl {
                text-align: center;
                padding: 0px;
                font-weight: 700;
                font-style: italic;                             
                border-radius: 5px;     
                height: 25px;           
            }
            .bg_none i {
                border: 1px solid #ff6701;
                border-radius: 25px;
                color: #ff6701;
                font-size: 17px;
                height: 33px;
                line-height: 30px;
                width: 33px;
            }
            .bg_none:hover i {
                border: 1px solid #000;
                border-radius: 25px;
                color: #000;
                font-size: 17px;
                height: 33px;
                line-height: 30px;
                width: 33px;
            }
            .bg_none {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
                padding: 5px;
            }
            .mytext{
                border:0;padding:10px;background:whitesmoke;
            }
            .text2{
                width:100%;
                display:flex;flex-direction:column;
                padding-bottom: 0;
            }
            .text2 > p:first-of-type{
                width:100%;margin-top:0;margin-bottom:auto;line-height: 13px;font-size: 13px;
                padding-bottom: 0;
                color: #594c4c;
            }
            .text2 > p:last-of-type{
                width:100%;text-align:right;color:gray;margin-top:auto;
                padding-bottom: 0;
            }
            .text-l{
                float:left;padding-right:10px;
            }        
            .text-r{
                float:right;padding-left:10px;
            }
            .avatar-chat{
                display:flex;
                justify-content:center;
                align-items:center;
                width:25%;
                float:left;
                padding-right:10px;
            }
            .macro{
                margin-top:5px;width:85%;border-radius:5px;padding:5px;display:flex;
            }
            .msj-rta{
                float:right;
                background:#fff;
            }
            .msj{
                float:left;
                background: #dcf8c6;
                border: 1px solid #fff;
            }
            .frame{
                background:#e0e0de;
                height:450px;
                overflow:hidden;
                padding:0;
            }
            .frame > div:last-of-type{
                position:absolute;bottom:0;width:100%;display:flex;
            }
            .msj-rta.macro{                
                margin-left:1%;
            }
            .msj:before{
                width: 0;
                height: 0;
                content:"";
                top:-5px;
                left:-18px;
                position:relative;
                border-style: solid;
                border-width: 0 13px 13px 0;
                border-color: transparent #fff transparent transparent;            
            }
            .msj-rta:after{
                width: 0;
                height: 0;
                content: "";
                top: -5px;
                left: 58px;
                position: relative;
                border-style: solid;
                border-width: 13px 13px 0 0;
                border-color: #fff transparent transparent transparent;  
            } 
            #ul-chat {
                list-style-type: none;
            } 
            .chat-window{
                bottom:0;
                position:fixed;
                float:right;
                margin-left:10px;
                margin-bottom: 0;
                right: 0;
            }
            .chat-window > div > .panel{
                border-radius: 5px 5px 0 0;
                margin-bottom: 0;
            }
            .icon_minim{
                padding:2px 10px;
            }
            .msg_container_base{
              background: #e5e5e5;
              margin: 0;
              padding: 0 10px 10px;
              max-height:300px;
              overflow-x:hidden;
            }
            .top-bar {
              background: #666;
              color: white;
              padding: 10px;
              position: relative;
              overflow: hidden;
            }
            .msg_receive{
                padding-left:0;
                margin-left:0;
            }
            .msg_sent{
                padding-bottom:20px !important;
                margin-right:0;
            }
            .messages {
              background: white;
              padding: 10px;
              border-radius: 2px;
              box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
              max-width:100%;
            }
            .messages > p {
                font-size: 13px;
                margin: 0 0 0.2rem 0;
              }
            .messages > time {
                font-size: 11px;
                color: #ccc;
            }
            .msg_container {
                padding: 10px;
                overflow: hidden;
                display: flex;
            }
            /*.avatar {
                position: relative;
                padding: 0;
            }*/
            .base_receive > .avatar:after {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                width: 0;
                height: 0;
                border: 5px solid #FFF;
                border-left-color: rgba(0, 0, 0, 0);
                border-bottom-color: rgba(0, 0, 0, 0);
            }
            .base_sent {
              justify-content: flex-end;
              align-items: flex-end;
            }
            .base_sent > .avatar:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 0;
                border: 5px solid white;
                border-right-color: transparent;
                border-top-color: transparent;
                box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
            }
            .msg_sent > time{
                float: right;
            }
            .msg_container_base::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
            }
            .msg_container_base::-webkit-scrollbar
            {
                width: 12px;
                background-color: #F5F5F5;
            }
            .msg_container_base::-webkit-scrollbar-thumb
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #555;
            }
            .btn-group.dropup{
                position:fixed;
                left:0px;
                bottom:0;
            }
            .text-title {
                float: left;
                padding-left: 16px;
                font-size: 17px;
                color: aliceblue;
                font-weight: bold;
                padding-top: 14px;
                display: none;  
            }
            @media (max-width: 767px){
                .text-title {
                    display:block;   
                }
            }
            @media (max-width: 767px) {
                .header-wrapper {                    
                    background: #001d57;
                }
            }
            .gritter-title {
                color: #fff;
            }
            .gritter-item p {
                color: #fff;
            }
            .main-nav {
                margin-top: 0px;
            }
            .label-warning {
                position: absolute;
                top: 14px;
                right: 1px;
                text-align: center;
                font-size: 9px;
                padding: 5px 6px;
                background-color: darkorange !important;
                line-height: .9;
                color: #fff;
            }
            .notif {
                font-size: 13pt;
                padding-top: 6px;
                color: #fff;
                border-radius: 50%;
                border: solid 1px grey;
                padding: 11px;
                background: #1a7cbe;
            }

            .not-chat {
              width: 20px !important;
                border-radius: unset !important;
                border: none !important;
                height: auto !important;
                left: -164px !important;
                margin: auto !important;
                top: -5px;
                background-color: #16b122 !important;
            }
            @media screen and (max-width: 735px) {
              .not-chat {
                  left: 0 !important;
              }
            }
        </style>   
        <?php 
          if(!empty($senders)) {
              $send = 1;
          }else{
            $send = 0;
          }
        ?>     
        <?php if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == '::1') : ?>
            <script type="text/javascript" src="<?= base_url(); ?>assets/js/vue.js"></script>
        <?php else : ?>
            <script type="text/javascript" src="<?= base_url(); ?>assets/js/vue.min.js"></script>
        <?php endif; ?>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/vuedraggable.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
    </head>
    <body class="pushmenu-push">
       
        <div class="header-wrapper" style="top: 0px;left:0">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style02">
                <!-- .container start -->
                <div class="">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">
                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo logo-m">
                                            <a href="<?= base_url(); ?>">
                                                <img src="<?= base_url(); ?>assets/img/logo-white.png" alt="Marine Business"/>
                                            </a>
                                        </div>
                                        <div class="logo logo-deks">
                                            <a href="<?= base_url(); ?>">
                                                <img src="<?= base_url(); ?>assets/img/logo.png" alt="Marine Business"/>
                                            </a>
                                        </div>
                                    </div><!-- .navbar-header start -->
                                    <!-- MAIN NAVIGATION -->
                                    <div class="navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown current-menu-item">
                                                <a href="<?= base_url(); ?>">Home</a>
                                            </li><!-- .dropdown end -->
                                            <li class="dropdown">
                                                <a href="<?= base_url('profil'); ?>">About</a>
                                            </li>
                                            <!--<li class="dropdown">-->
                                            <!--    <a href="<?= base_url('profil'); ?>">Tracking</a>-->
                                            <!--</li>                                                                                                                                -->
                                            <!--<li>-->
                                            <!--    <a href="#" >Help</a>-->
                                            <!--</li>    -->
                                            <!-- 
                                            <li class="advertise-fast" id="top-advertise-button">
                                                <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Gratis</a>   
                                                <div class="shine"></div>
                                            </li> -->
                                            <?php if(empty($this->session->userdata('email'))) { ?>
                                            <li>
                                                <a href="<?= base_url('register'); ?>" >Log In</a>
                                            </li>
                                            <?php } else { ?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-bell" style="color: #fff;font-size: 12pt;"></i>
                                                    <?php if($notifikasi["count"]>0) { ?>
                                                        <span class="label label-warning"><?= $notifikasi["count"]; ?></span>
                                                    <?php } ?>
                                                </a>
                                                <ul class="dropdown-menu notif-li" style="overflow-y: scroll;overflow-x: hidden;max-height: 400px;background-color: #434051;left:-100px">                 
                                                    <div class="panel panel-default" style="margin-bottom: 0;background-color: #32465a;">
                                                	    <div class="panel-heading">
                                            	            <h3 class="panel-title"><?= $notifikasi["count"]; ?> 
                                            	                <a href="<?= base_url('setting/notifikasi') ?>">Notifications</a>
                                            	            </h3>
                                                	    </div>
                                                		<div class="panel-body">
                                                		    <?php if($notifikasi["count"]==0) { ?>
                                                		        <p style="text-align: center;">Empty Notification</p>
                                                		    <?php } ?>
                                                		    <?php foreach ($notifikasi["row"] as $key => $value): ?>
                                                		    <a href="<?= $value->url; ?>" class="notif-link" data-id="<?= $value->id; ?>" data-action="<?= $value->action; ?>">
                                                    		    <div class="alert alert-info" style="margin-bottom: 5px;padding: 10px 5px;color: #ffffff;background-color: #232b33;">
                                                    		      <strong class="default" style="padding-right:10px"><i class="fa fa-ship"></i></strong><?= $value->message_notif; ?>
                                                    		    </div>
                                                		    </a>
                                                		    <?php endforeach ?>  
                                                		</div>
                                                	</div>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <span class="meta">
                                                    <span class="avatar">
                                                      <?php
                                                        $thumbnail= "noprofile40.jpeg";
                                                        foreach($this->Pengaturan->getFoto() as $item) {
                                                          $thumbnail = $item["thumbnail"];              
                                                        }
                                                      ?>
                                                      <img src="<?php echo base_url('uploads/profile/thumbnail/'. $thumbnail); ?>" class="img-circle" alt="" />                                                      
                                                    </span>
                                                    <div class="text hidden-xs hidden-sm pl5">
                                                          <?php echo $this->session->userdata('nama') ?>                            
                                                    </div>
                                                </span>                                             
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('setting') ?>">Setting</a></li>
                                                    <li><a href="<?= base_url('register/keluar') ?>" >Logout</a></li>
                                                </ul>
                                            </li>            
                                            <?php } ?>                                
                                        </ul><!-- .nav.navbar-nav end -->
                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper" style="margin-top: 5px">
                                            <button class="dl-trigger">Menu</button>
                                        </div>
                                        <div class="pushmenu pushmenu-left">
                                          <ul class="links">
                                                <li>
                                                    <a href="<?= base_url(); ?>">Home</a>               
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('profil'); ?>">About</a>                                                    
                                                </li>
                                                <!--<li>-->
                                                <!--    <a href="<?= base_url('profil'); ?>">Tracking</a>-->
                                                <!--</li>                                       -->
                                                <!--<li>-->
                                                <!--    <a href="#" >Help</a>-->
                                                <!--</li>-->
                                                <!-- <li class="advertise-fast" id="top-advertise-button">
                                                    <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Gratis</a>   
                                                    <div class="shine"></div>
                                                </li> -->
                                                <?php if(empty($this->session->userdata('email'))) { ?>
                                                <li>
                                                    <a href="<?= base_url('register'); ?>" >Log In</a>
                                                </li>
                                                <?php } else { ?>  
                                                <li><a href="<?= base_url('setting/notifikasi') ?>" >
                                                        Notification
                                                        <i class="fa fa-bell" style="color: #fff;font-size: 12pt;"></i> 
                                                        <span class="label label-warning" style="top: 2px;right: 13px;"><?= $notifikasi["count"]; ?></span>
                                                    </a>
                                                </li>                                              
                                                <li><a href="<?= base_url('setting') ?>">Setting</a></li>
                                                <li><a href="<?= base_url('register/keluar') ?>" onclick="logout();">Logout</a></li>
                                                <?php } ?>                                                 
                                          </ul>
                                        </div>
                                        <div class="text-title">Marine Business</div>
                                        <div id="search">                                            
                                                <a href="<?= base_url('setting/notifikasi') ?>">
                                                <i class="fa fa-bell-o notif lonceng"></i>&nbsp;&nbsp;
                                                <span class="label label-warning lonceng" style="top: 3px;"><?= $notifikasi["count"]; ?></span>
                                                <a>                                                                             
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper end -->
        <?php 
        if ($this->router->fetch_class() != 'home'){            
            $this->load->view($main); 
        }
        else {                  
            $this->load->view('home/index'); 
        } 
        ?>                                 
        <div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">                                    
                                    <h3>newsletter subscribe</h3>
                                </div>
                                <p>
                                    Subscribe to our newsletter and we will 
                                    inform you about newest projects and promotions.
                                </p>
                                <br />
                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>
                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>
                                <ul>
                                    <li><a href="<?= base_url(); ?>">Home</a></li>
                                    <li><a href="<?= base_url('profil'); ?>">About</a></li>
                                    <li><a href="#">Tracking</a></li>
                                    <li><a href="#">Help</a></li>                      
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Link</h3>
                                </div>
                                <ul>
                                    <li><a href="https://www.bmkg.go.id/">Badan Meteorologi, Klimatologi dan Geofisika</a></li>
                                    <li><a href="http://www.dephub.go.id/">Kementrian Perhubungan</a></li>
                                    <li><a href="http://www.beacukai.go.id/">Direktorat Jendral Bea Cukai</a></li>
                                    <li><a href="http://www.pajak.go.id/">Pajak</a></li>
                                    <li><a href="https://www.pelindo.co.id">Pelindo</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>
                                <ul class="footer-social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->
            <!-- <a href="#" class="scroll-up">Scroll</a> -->
        </div><!-- #footer-wrapper end -->
        
        <div id="frame">
            <?php if(!empty($this->session->userdata('email')) && !empty($senders)) { ?>
            <div id="sidepanel">
                <div id="profile">
                    <div class="wrap">
                        <?php
                          $thumbnail= "noprofile40.jpeg";
                          foreach($this->Pengaturan->getFoto() as $item) {
                            $thumbnail = $item["thumbnail"];              
                          }
                        ?>
                        <img id="profile-img" src="<?php echo base_url('uploads/profile/thumbnail/'. $thumbnail); ?>" class="online" alt="" />
                        <p><?php echo $this->session->userdata('nama')?></p>
                        <i class="fa fa-chevron-up expand-button" aria-hidden="true"></i>                  
                    </div>
                </div>
                <!-- <div id="search-chat">
                    <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                    <input type="text" placeholder="Search contacts..." />
                </div> -->
                <div id="contacts" style="display: none;">
                    <ul>
                        <template v-for="sender in senders">
                            <li class="contact" :data-id="sender.from" :data-name="sender.from_name" v-if="sender.from != '<?php echo $this->session->userdata('id')?>'">
                                <div class="wrap">
                                    <!-- <span class="contact-status online"></span> -->
                                    <img :src="'https://marinebusiness.co.id/uploads/profile/thumbnail/' +sender.thumbnail" alt="" />
                                    <span class="label label-warning not-chat" v-if="sender.to == '<?php echo $this->session->userdata('id')?>' && sender.jml>0">{{ sender.jml }}</span>
                                    <div class="meta-chat">
                                        <p class="name">{{ sender.from_name }}</p>   
                                    </div>
                                </div>
                            </li>
                            <li class="contact" :data-id="sender.to" :data-name="sender.to_name" v-if="sender.to != '<?php echo $this->session->userdata('id')?>'">
                                <div class="wrap">
                                    <!-- <span class="contact-status busy"></span> -->
                                     <img :src="'https://marinebusiness.co.id/uploads/profile/thumbnail/' +sender.thumbnail" alt="" />
                                    <span class="label label-warning not-chat" v-if="sender.to != '<?php echo $this->session->userdata('id')?>' && sender.jml>0">{{ sender.jml }}</span>
                                    <div class="meta-chat">
                                        <p class="name">{{ sender.to_name }}</p>                                                                                
                                    </div>
                                </div>
                            </li>                           
                        </template>
                    </ul>
                </div>
                <!-- <div id="bottom-bar">
                    <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                    <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
                </div> -->
            </div>
            <div class="content">
                <div class="contact-profile">
                    <input type="hidden" name="id_sender" id="id_sender" value="">                    
                    <img id="img-profil-chat" src="https://d3sknresuoj0kc.cloudfront.net/noprofile40.jpeg" alt="" />
                    <p id="name_sender"></p>
                   
                </div>
                <div class="messages-chat" @click="readChat()" style="display: none;">                    
                        <ul>
                            <template v-for="chat_date in chats_dates">
                                <li class="label-tgl">{{ chat_date.DateOnly }}</li>
                                <template v-for="chat in chats[chat_date.DateOnly]">
                                    <li class="sent" v-if="chat.from == '<?php echo $this->session->userdata('id')?>'">
                                        <p>{{ chat.message }}
                                          <svg v-if="chat.recd == 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#92A58C" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path>
                                          </svg>
                                          <svg v-else id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#4FC3F7" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg>
                                        </p>
                                        <p style="background: none;color: #435f7a;padding: 0 5px;"><small>{{ chat.periode }}</small></p>
                                    </li>
                                    <li class="replies" v-else>                                        
                                        <p>{{ chat.message }}</p>
                                        <p style="background: none;"><small>{{ chat.periode }}</small></p>
                                    </li>
                                    
                                </template>
                            </template>
                            
                        </ul>            
                </div>
                <div class="message-input" style="display: none;">
                    <div class="wrap">
                    <input type="text" @click="readChat()" @keydown.13="insertChats(<?php echo $this->session->userdata('id')?>)" placeholder="Write your message..." />
                    <i class="fa fa-paperclip attachment hidden" aria-hidden="true"></i>
                    <button class="submit"  @click="insertChats(<?php echo $this->session->userdata('id')?>)"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/moment.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-datepicker2.js"></script>
        <script src="<?= base_url(); ?>assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/datatables/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script> -->
        <!-- <script type="text/JavaScript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap4.min.js"></script> -->
        <script src="<?= base_url(); ?>assets/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="<?= base_url(); ?>assets/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="<?= base_url(); ?>assets/masterslider/masterslider.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="<?= base_url(); ?>assets/js/jquery.dlmenu.min.js"></script>
        <script src="<?= base_url(); ?>assets/style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="<?= base_url(); ?>assets/js/include.js"></script><!-- custom js functions -->
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-accordions.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-tabs.js"></script>
        <script src="<?= base_url(); ?>assets/js/validator.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.smartWizard.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.gritter.min.js"></script>       
        <script src="<?= base_url(); ?>assets/js/jquery.price_format.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>
        <script src="<?= base_url(); ?>assets/js/thickbox.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/daterangepicker/moment.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/calendar/calendar.js"></script>
<!--         <script src="<?= base_url(); ?>assets/js/chat.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.cookie.js"></script>
 -->
        <!-- <script src="<?= base_url(); ?>assets/js/gcal.min.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"></script> -->
        <!-- 
        <script src="<?= base_url(); ?>assets/js/locale/bootstrap-table-id-ID.min.js"></script>
        <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
        <script src="https://rawgit.com/wenzhixin/bootstrap-table/master/src/extensions/export/bootstrap-table-export.js"></script> -->
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                var wow = new WOW({
                    animateClass: 'animated',
                    offset:100,
                    callback:function(box) {}
                  });
                  wow.init();
                $("#area").tagsinput('items');
                $(".custom-select").each(function(){
                    $(this).wrap("<span class='select-wrapper'></span>");
                    $(this).after("<span class='holder'></span>");
                });
                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };
                $(document).ready(equalHeight);
                $(window).resize(equalHeight);
                // MASTER SLIDER START 
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 500, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');
                // CLIENTS CAROUSEL START 
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
                // TESTIMONIAL CAROUSELS START
                $('#testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    autoheight: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
                data: {
                    csrf_token: <?php echo "'". $this->security->get_csrf_hash()."'" ?>
                }
            });         
            $(document).ready(function(){               
                $("input[type='checkbox']").on('click', function(event){                                            
                    var check = $("input[type='checkbox']").is(':checked');                    
                    if(check){
                         $("#btnAgreement").removeAttr('disabled');
                    }else{
                        $("#btnAgreement").attr('disabled',true);
                    }     
                }) 
                $("#btnAgreement").on('click', function(event){                                            
                   $("#myModal").modal('hide');
                })                 
                $menuLeft = $('.pushmenu-left');                
                $nav_list = $('.dl-trigger');
                $nav_list.click(function() {
                    $(this).toggleClass('active');
                    $('.pushmenu-push').toggleClass('pushmenu-push-toright');                
                    $menuLeft.toggleClass('pushmenu-open');                
                });
                $('#datetimepicker10').datepicker({
                    autoclose: true,     
                    // viewMode: 'years',
                    // minViewMode: "years",
                    format: 'yyyy-mm-dd'
                });
                $('#datetimepicker11').datepicker({
                    autoclose: true,     
                    // viewMode: 'years',
                    // minViewMode: "years",
                    format: 'yyyy-mm-dd'
                });
                $('#datetimepicker1').datetimepicker({
                    format: 'DD-MM-YYYY HH:mm',
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    }
                });
                $('#datetimepicker2').datetimepicker({
                    format: 'DD-MM-YYYY HH:mm',
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    }
                });
                var btnFinish = $('<button></button>').text('Finish')
                                                 .addClass('btn btn-info hidden')
                                                 .attr('id','btn-finish')
                                                 .on('click', function(){                                                         
                                                        if( !$(this).hasClass('disabled')){ 
                                                            var elmForm = $("#myForm");
                                                            if(elmForm){
                                                                elmForm.validator('validate'); 
                                                                var elmErr = elmForm.find('.has-error');
                                                                if(elmErr && elmErr.length > 0){
                                                                    alert('Oops we still have error in the form');
                                                                    return false;    
                                                                }else{  
                                                                    var post = $('form#myForm').serialize();
                                                                    $.ajax({
                                                                        type:"post",
                                                                        data:post,
                                                                        url:"<?php echo base_url(); ?>setting/simpan_data",
                                                                        cache:false,
                                                                        dataType: 'json',
                                                                        success: function(data){
                                                                            if(data.error==false){                              
                                                                                document.cookie = 'csrf_cookie_name=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';  
                                                                                window.location.href= 'https://marinebusiness.co.id/setting/iklan' ;
                                                                            }                                                   
                                                                        },
                                                                        error: function(){
                                                                            console.log("Error");
                                                                        }
                                                                    });
                                                                    return false;  
                                                                }
                                                            }
                                                        }
                                                    });
                var btnCancel = $('<button></button>').text('Cancel')
                                                 .addClass('btn btn-danger')
                                                 .on('click', function(){ 
                                                        $('#smartwizard').smartWizard("reset"); 
                                                        $('#myForm').find("input, textarea").val(""); 
                                                    });                                                         
                // Smart Wizard
                $('#smartwizard').smartWizard({ 
                        selected: 0, 
                        theme: 'dots',
                        transitionEffect:'fade',
                        toolbarSettings: {toolbarPosition: 'bottom',
                                          toolbarExtraButtons: [btnFinish]
                                        },
                        anchorSettings: {
                                    markDoneStep: true, // add done css
                                    markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                    removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                    enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                                }
                     });
                $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                    var elmForm = $("#form-step-" + stepNumber);
                    if(stepDirection === 'forward' && elmForm){
                        elmForm.validator('validate'); 
                        var elmErr = elmForm.children('.has-error');
                        if(elmErr && elmErr.length > 0){
                            // Form validation failed
                            return false;    
                        }
                    }
                    return true;
                });
                $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                    // Enable finish button only on last step
                    if(stepNumber == 2){ 
                        document.documentElement.scrollTop = 0;
                        $('#btn-finish').removeClass('hidden');  
                    }else{
                        $('#btn-finish').addClass('hidden');
                    }
                });                               
                $(document).on('click', '.panel-heading span.icon_minim', function (e) {
                    var $this = $(this);
                    if (!$this.hasClass('panel-collapsed')) {
                        $this.parents('.panel').find('.panel-body').slideUp();
                        $this.addClass('panel-collapsed');
                        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
                    } else {
                        $this.parents('.panel').find('.panel-body').slideDown();
                        $this.removeClass('panel-collapsed');
                        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
                    }
                });
                $(document).on('focus', '.panel-footer input.chat_input', function (e) {
                    var $this = $(this);
                    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
                        $this.parents('.panel').find('.panel-body').slideDown();
                        $('#minim_chat_window').removeClass('panel-collapsed');
                        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
                    }
                });
                $(document).on('click', '#new_chat', function (e) {
                    var size = $( ".chat-window:last-child" ).css("margin-left");
                     size_total = parseInt(size) + 400;
                    alert(size_total);
                    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
                    clone.css("margin-left", size_total);
                });
                $(document).on('click', '.icon_close', function (e) {                    
                    $( "#chat_window_1" ).remove();
                });
                

            });   
        </script> 
        <!-- script chat -->
        <script type="text/javascript">            
            var app_chat = new Vue({
                el: "#frame",                                     
                data: {
                    chats: [],
                    chats_dates: [],
                    pengajuans: [] ,
                    senders:[],
                    count: []    
                  },
                methods: {
                    resetData: function () {
                      this.chats = [];
                      this.pengajuans = [];
                      this.senders = [];
                      this.chats_dates = [];
                    },
                    loadSender: function () {
                      var that = this;
                        jQuery.ajax({
                            type: "GET",
                            cache:false,
                            dataType: 'json',
                            url: '<?php echo base_url() ?>home/get_sender',
                            success: function(response) {                                                                                                 
                                that.senders = response.senders;                                                                
                            },
                        });
                    },
                    loadChat: function () {
                      var that = this;
                        jQuery.ajax({
                            type: "GET",
                            cache:false,
                            dataType: 'json',
                            url: '<?php echo base_url() ?>home/get_chat/' + $("#id_sender").val(),
                            success: function(response) {                                                                 
                                that.chats = response.chats;    
                                that.pengajuans = response.pengajuans;                                  
                                that.chats_dates = response.chats_dates; 
                                that.count = response.count;
                                
                            },
                        });
                    },
                    insertChats: function(id) { 
                          
                        var that = this;                    
                        jQuery.ajax({
                            type: "POST",
                            cache:false,
                            dataType: 'json',
                            data: {message: $(".message-input input").val(), id: $("#id_sender").val().trim(), nama: $("#name_sender").text().trim() },
                            url: '<?php echo base_url() ?>home/insert_chat' ,
                            success: function(response) {                                  
                                if(response.ok){                                    
                                    app_chat.loadChat(); 
                                    $(".messages-chat").scrollTop($(".messages-chat").prop('scrollHeight'));                                   
                                }                                                                                               
                            },
                        }); 
                        $(".message-input input").val('');                        
                        $(".messages-chat").scrollTop($(".messages-chat").prop('scrollHeight'));                                                 
                    },
                    readChat: function(id) {
                        jQuery.ajax({
                            type: "GET",
                            cache:false,
                            dataType: 'json',                            
                            url: '<?php echo base_url() ?>home/read_chat' ,
                            success: function(response) {                                  
                                if(response.ok){      
                                     app_chat.loadSender();                               
                                    app_chat.loadChat();                                    
                                }                                                                                               
                            },
                        });      
                    },                  
                }
            });
            $(document).ready(function(){  
                app_chat.loadSender();  
                setTimeout(function(){
                  $(".contact").first().trigger("click"); 
                  $(".messages-chat").scrollTop($(".messages-chat").prop('scrollHeight'));                 
                },3000);

                function timeout() {
                    setTimeout(function () {
                      app_chat.loadSender(); 
                      app_chat.loadChat();
                        timeout();
                    }, 5000);
                }
                var sender = '<?php echo $send ?>';
                if(sender==1){
                  timeout();  
                }                                

                $(document).on('click', '.contact', function (e) {
                    $(".contact").removeClass("active");
                    $(this).addClass("active");  
                    $("#id_sender").val($(this).attr("data-id"));  
                    $("#name_sender").text($(this).attr("data-name"));                    
                    $("#img-profil-chat").attr("src",$(this).find("img").attr("src"));
                    app_chat.loadChat();    

                    $(".messages-chat").scrollTop($(".messages-chat").prop('scrollHeight'));                                     
                });
                
                $(document).on('click', '.notif-link', function (e) {
                    var id = $(this).attr('data-id');
                    var action = $(this).attr('data-action'); 
                    if(action=="read"){
                        jQuery.ajax({
                            type: "GET",
                            cache:false,
                            dataType: 'json',                            
                            url: '<?php echo base_url() ?>setting/read_notif/'+ id ,
                            success: function(response) {       
                                if(response.ok){      
                                   //alert('success');
                                }                                                                                               
                            },
                        }); 
                    }
                });
            });
            $(".expand-button").click(function() {
              if($(".expand-button").hasClass("fa-chevron-down")){                
                $("#contacts").css("display","none");
                $(".messages-chat").css("display","none");
                $(".message-input").css("display","none");
                $(".expand-button").removeClass("fa-chevron-down");
                $(".expand-button").addClass("fa-chevron-up")
              }else{                
                $("#contacts").css("display","block");
                $(".messages-chat").css("display","block");
                $(".message-input").css("display","block");
                $(".expand-button").removeClass("fa-chevron-up");
                $(".expand-button").addClass("fa-chevron-down")
              }                  
             
            });

            $("#profile-img").click(function() {
              if($(".expand-button").hasClass("fa-chevron-down")){                
                $("#contacts").css("display","none");
                $(".messages-chat").css("display","none");
                $(".message-input").css("display","none");
                $(".expand-button").removeClass("fa-chevron-down");
                $(".expand-button").addClass("fa-chevron-up")
              }else{
                $("#contacts").css("display","block");
                $(".messages-chat").css("display","block");
                $(".message-input").css("display","block");
                $(".expand-button").removeClass("fa-chevron-up");
                $(".expand-button").addClass("fa-chevron-down")
              } 
            });
           
            $("#chat_input").on("keydown", function(e){
                if (e.which == 13){
                    var text = $(this).val();
                    if (text !== ""){
                        insertChat("me", text);              
                        $(this).val('');
                    }
                }
            });
            $('body > div > div > div:nth-child(2) > span').click(function(){
                $(".chat_input").trigger({type: 'keydown', which: 13, keyCode: 13});
            })            
        </script>
        <script>
          // This is called with the results from from FB.getLoginStatus().
          function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);            
            if (response.status === 'connected') {
              // Logged into your app and Facebook.
              testAPI();
            }
          }

          function checkLoginState() {
            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });
          }

          window.fbAsyncInit = function() {
            FB.init({
              appId      : '445777415876487',
              cookie     : true,
              xfbml      : true,
              version    : 'v3.0'
            });
            // FB.getLoginStatus(function(response) {
            //   statusChangeCallback(response);
            // });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));

          function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {              
              console.log('Successful login for: ' + response.name);             
              $.post("<?php echo base_url(); ?>register/cek_fb",response, function(data){    
                if(data.error==false)
                {
                  if(data.status==0){
                      window.location.href = "https://marinebusiness.co.id";
                  }else{
                    $("#modalRegister").modal("show");
                    $("#txtidFB").val(data.data.id);
                    $("#txtNameFB").val(data.data.name);
                  }
                  
                }
              });
            });
          }

          function logout(){            
            FB.logout(function(response) {
                alert('Logout');
               // Person is now logged out
            });
          }
        </script>    
    </body>
</html>