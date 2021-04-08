<?php 


Class Application 
{
    protected $basePath;
    public function __construct($basePath = null)
    {
        $this->basePath = $basePath;

       /* $this->bootstrapContainer();
        $this->registerErrorHandling();
        $this->bootstrapRouter();*/
    }
    public function version()
    {
        return 'EDAH (1.0.1)  EDAH Framwork ';
    }
}