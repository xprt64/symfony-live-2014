<?php

namespace Model\P4_LessonScheduleAggregate;

final class TeacherId
{
    private $teacherId;

    public function __construct($teacherId)
    {
        \Assert\that($teacherId)->string();
        $this->teacherId = $teacherId;
    }

    public function __toString()
    {
        return $this->teacherId;
    }

    public function equals(TeacherId $other)
    {
        return $this->teacherId == $other->teacherId;
    }
} 