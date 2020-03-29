<!-- PHP - Random Quote Generator -->
<?php
// Create the Multidimensional array of quote elements and name it quotes
$quotes = [
  // Each inner array element should be an associative array
  [
    'quote' => 'Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.',
    'source' => 'Patrick McKenzie',
    'citation' => 'Twitter',
    'year' => '2016',
  ],
  [
    'quote' => 'Anything is possible!',
    'source' => 'Kevin Garnet',
    'citation' => 'post game quote',
    'year' => '2008',
  ],
  [
    'quote' => 'I called game.',
    'source' => 'Paul Pierce',
    'citation' => 'post game quote',
    'year' => '2015',
  ],
  [
    'quote' => 'Success is peace of mind which is a direct result of self-satisfaction in knowing you did your best to become the best you are capable of becoming.',
    'source' => 'John Wooden',
  ],
  [
    'quote' => 'Silence is a source of great strength',
    'source' => 'Lao Tzu',
  ],
  [
    'quote' => 'Ho! Tom Bombadil!',
    'source' => 'Frodo Baggins',
    'citation' => 'The Fellowship of the Ring',
    'year' => '1948'
  ],
  [
    'quote' => 'For every minute you remain angry, you give up sixty seconds of peace of mind.',
    'source' => 'Ralph Waldo Emerson',
    'citation' => 'essay',
  ],
  [
    'quote' => 'The mediocre teacher tells. The good teacher explains. The superior teacher demonstrates. The great teacher inspires.',
    'source' => 'William Arthur Ward',
  ],
];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($arr) {
  global $quotes;
  $quotesCount = count($arr) - 1;
  $random = rand(0, $quotesCount);
  return $quotes[$random];
}

// Create the printQuote funtion and name it printQuote
function printQuote() {

}

// function to randomly generate background color


// function to auto-refresh quotes page

?>