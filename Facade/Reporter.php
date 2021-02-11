<?php


namespace patterns\Facade;


class Reporter
{
    protected $dataLoader;

    protected $databaseAnalizer;

    protected $emailSender;

    protected $pdfFormater;

    public function __construct(
        DatabaseAnalizer $databaseAnalizer,
        DataLoader $dataLoader,
        EmailSender $emailSender,
        PdfFormater $pdfFormater
    ) {
        $this->databaseAnalizer = $databaseAnalizer;
        $this->dataLoader = $dataLoader;
        $this->emailSender = $emailSender;
        $this->pdfFormater = $pdfFormater;
    }

    public function report()
    {
        $data = $this->dataLoader->load();
        $data = $this->databaseAnalizer->analize();
        // ...
        $this->emailSender->send();
    }
}