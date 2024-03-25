<?php

class Plane
{
    private ? int $id = null;

    public function __construct(private string $name, private int $start_year, private int $end_year, private string $picture_url)
    {

    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
     /**
     * @return string
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    

    /**
     * @return int
     */
    public function getstartYear(): int
    {
        return $this->start_year;
    }

    /**
     * @param int 
     */
    public function setstartYear(int $start_year): void
    {
        $this->start_year = $start_year;
    }

    /**
     * @return int
     */
    public function getendYear(): int
    {
        return $this->end_year;
    }
    
    /**
     * @param int 
     */
    public function setendYear(int $end_year): void
    {
        $this->end_year = $end_year;
    }
    
    /**
     * @return string
     */
    public function getpicture_Url(): string
    {
        return $this->end_year;
    }

    /**
     * @param string $description
     */
    public function setpicture_Url(string $picture_Url): void
    {
        $this->picture_Url = $picture_Url;
    }
    
    public function use() : array
    {
        return [
            "id" => $this->id,
            "name" => $this->name
        ];
    }
}

