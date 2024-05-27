<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\E5x;

use PhpZip\ZipFile;

class Zipper
{
    public const OUTPUT_EXT = '.e5x';

    /**
     * @var string
     */
    private $xml;

    /**
     * @var ZipFile
     */
    private $zip;

    public function __construct(string $xml)
    {
        $this->xml = $xml;

        $this->zip = new ZipFile();
    }

    public function addFile($filePath)
    {
        if (!file_exists($filePath)) {
            return;
        }

        $this->zip->addFile($filePath, $this->getFileName().'/'.basename($filePath));
    }

    public function compress(string $path = null)
    {
        $fileName = $this->getFileName();

        $this->zip->addFromString($fileName.'.xml', $this->xml);

        if (null === $path) {
            $this->zip->outputAsAttachment($fileName.self::OUTPUT_EXT);
        } else {
            $this->zip->saveAsFile($path);
        }

        $this->zip->close();
    }

    private function getFileName()
    {
        return md5($this->xml);
    }
}
