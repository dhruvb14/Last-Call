<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
    </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
        <style>
        .left { float : left; width : 48%; }
.right { float : right; width : 48%; }
.spacer { clear : both; }
        </style>
    </head>
    <body>
      <!-- Home -->
    <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <a data-role="button" data-theme="b" href="index.php" data-icon="home" data-iconpos="left" class="ui-btn-left">
                    Home
                </a>
                <a data-role="button" data-theme="b" href="https://docs.google.com/spreadsheet/embeddedform?formkey=dF9rMWRKU2tRWmdmcWszYkdtdlFuZEE6MQ" data-icon="check" data-iconpos="right" class="ui-btn-right">
                    Survey
                </a>
                <h3>
                    The Last Call
                </h3>
            </div>
                          <h4>  <?php  //echo random_fact(); ?></h4>
