<?php

declare(strict_types=1);

namespace App\Helpers;

class RandomDataGenerator
{
    private array $names;

    private array $resultData;
    public function __construct($sourceData)
    {
        $this->names = $sourceData['names'];
    }

    public function getData($limit = null): array
    {
        $this->renderData();
        return $this->resultData;
    }

    private function randomNumber($start = null, $end = null): int
    {
        return rand($start, $end);
    }

    private function randomDate($startDate = '1970-01-01', $endDate = null): string
    {
        $minDate = strtotime($startDate);
        $maxDate = strtotime($endDate);
        $randDate = $this->randomNumber($minDate, $maxDate);
        return date('Y-m-d', $randDate);
    }

    private function renderData(): void
    {
        foreach($this->names as $name){
            $this->resultData['data'][] = [
                'name' => $name,
                'age' => $this->randomNumber(18, 75),
                'created_at' => $this->randomDate('1970-01-01', date('Y-m-d')),
            ];
        }
    }
}

