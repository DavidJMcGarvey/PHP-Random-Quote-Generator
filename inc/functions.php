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
  global $quotes;
  $quote = getRandomQuote($quotes);
  $title = $quote['quote'];
  $source = $quote['source'];
  $citation = $quote['citation'];
  $year = $quote['year'];

  echo "<p class=\"quote\">$title</p>";
  echo "<p class=\"source\">$source";
  if ($citation) {
    echo "<span class=\"citation\">$citation</span>";
  } else {
    echo "";
  }
  if ($year) {
    echo "<span class=\"year\">$year</span></p>";
  } else {
    echo "";
  }
  
}

// Functions to randomly generate background color RGB numbers
function randomRGB() {
  return rand(1, 256);
}

// Takes randomly generated colors and adds them to body CSS
function backgroundColor() {
  $red = randomRGB();
  $green = randomRGB();
  $blue = randomRGB();
  echo "<body style=\"background-color:rgb($red,$green,$blue)\">";
}

// Auto-refresh quotes page every 18 seconds
function reloadPage() {
  echo "<meta http-equiv=\"refresh\" content=\"18\" />";
}

?>