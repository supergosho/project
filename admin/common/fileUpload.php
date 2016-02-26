<?php

class fileUpload
{
  private $extensions  = array('jpg', 'png', 'gif', 'jpeg', 'bmp' );
  private $fileSize =  1024000;
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
  }

  public  function upload()
  {

  }
  public  function validate()
  {
    $imageErrors = array();
    if (isset($_FILES[$this->name])) {
        $fileName = $_FILES[$this->name]['name'];
        $fileSize = $_FILES[$this->name]['size'];
        $fileTmp  = $_FILES[$this->name]['tmp_name'];
        $fileType = $_FILES[$this->name]['type'];
        $fileExtention = strtolower(end(explode('.', $fileName)));
        $allowExtentions = array('jpg','jpeg', 'png', 'gif');

        if (!in_array($fileExtention, $this->extentions)) {
            $imageErrors = 'Wrong extention';
        }

        if ($fileSize > $this->fileSize) {
            $imageErrors = 'Your file is bigger than 1mb';
        }

    }
    return $imageErrors;
  }



    public function getExtensions()
    {
        return $this->extensions;
    }


    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;

        return $this;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }

  
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}




 ?>
