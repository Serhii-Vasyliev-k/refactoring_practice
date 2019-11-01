<?php

//Hint - use Single Responsibility Principle Violation
class Report
{
    public $title = 'Report Title';
    public $date = '2016-04-21';

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->date;
    }
}
class ReportContent extends Report
{
    public function getContents()
    {
        return [
            'title' => $this->title;
            'date' => $this->date;
        ];
    }
}
class ReportJson extends Report
{
    public function formatJson()
    {
        return [
            'title' => $this->title,
            'date' => $this->date,
        ];
    }
}
