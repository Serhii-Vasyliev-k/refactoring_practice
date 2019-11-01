<?php

//Hint - use Single Responsibility Principle Violation
class Report
{
    public $title = 'Report Title';
    public $date = '2016-04-21';

    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '';
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
