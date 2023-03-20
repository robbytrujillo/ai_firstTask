<?php
// deklarasi variabel
require_once 'vendor/autoload.php';

use \Keras\Keras;
use \Keras\Dataset\Xor;

// create the model
$model = new Sequential([
    new Dense(32, ['input_dim' => 2, 'activation' => 'relu']),
    new Dense(1, ['activation' => 'sigmoid'])
]);

// compile the model
$model -> compile(['loss' => 'binary_crossentropy', 'optimizer' => 'adam']); 

// train the model on the XOR dataset
$dataset = new Xor();
$model -> fit($dataset -> getSamples(), $dataset -> getTargets(), ['epochs' => 1000, 'verbose' => 0]);

// evaluate the model on the XOR dataset
$score = $model -> evaluate($dataset -> getSamples(), $dataset -> getTargets(), ['verbose' => 0]);

// print the score
printf("Score: %.2f%%\n", $score[1] * 100);
?>