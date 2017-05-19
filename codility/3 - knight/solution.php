<?php 

class chessMoves
{
	protected $x;
	protected $y;
	protected $squares;
	protected $possibleMoves;
	protected $log;

	public function __construct($log = false) 
	{
		$this->x = $this->y = 8;

		for ($i=0; $i < $this->x; $i++) { 
			for ($j=0; $j < $this->y; $j++) { 
				$this->squares[$i][$j] = 100;
			}
		}

		$this->squares[0][0] = 0;
		$this->possibleMoves = [
			[-2, -1],
			[-2, 1],
			[-1, -2],
			[-1, 2],
			[1, -2],
			[1, 2],
			[2, -1],
			[2, 1],
		];

		$this->log = $log;

	}

	public function findMinimumNumberOfMovesTo($x, $y)
	{
		$this->calculateMinimumMovesToOtherSquares();
		return $this->squares[$x][$y];
	}

	public function calculateMinimumMovesToOtherSquares() 
	{	
		$currentNumberOfMoves = 0;

		while(! $this->allMinimumMovesCalculated()) {
			$this->calculateDistances($currentNumberOfMoves);

			$currentNumberOfMoves++;
		}

		if ($this->log) {
			echo '<pre>'; print_r($this->squares); echo '</pre>';
		}
	}	

	public function allMinimumMovesCalculated() {

		foreach ($this->squares as $square) {
			foreach ($square as $s) {
				if ($s == 100) {
					return false;
				}
			}
			
		}

		return true;
	}

	public function calculateDistances($currentNumberOfMoves) {

		$squares = $this->getSquaresReachableWith($currentNumberOfMoves);

		foreach ($squares as $square) {

			$destinations = $this->findPossibleNextDestinations($square);

			foreach ($destinations as $destination) {
				if ($this->squares[$destination[0]][$destination[1]] > $currentNumberOfMoves) {
					 $this->squares[$destination[0]][$destination[1]] = $currentNumberOfMoves + 1;
				}
			}

		}
	}

	public function getSquaresReachableWith($numberOfMoves) {

		$temp = [];

		for ($i=0; $i < 8; $i++) { 
			for ($j=0; $j < 8; $j++) { 
				if ($this->squares[$i][$j] == $numberOfMoves) {
					$temp[] = [$i, $j];
				}
			}
		}

		return $temp;
	}

	public function findPossibleNextDestinations($square) {

		$destinations = [];

		foreach ($this->possibleMoves as $move) {
			$destination = array_map(function () {
			    return array_sum(func_get_args());
			}, $square, $move);

			if (!(min($destination) < 0 || max($destination) > 7)) {
				$destinations[] = $destination;
			}
		}

		return $destinations;
	}
}


$a = new chessMoves(true);
echo($a->findMinimumNumberOfMovesTo(7, 7));