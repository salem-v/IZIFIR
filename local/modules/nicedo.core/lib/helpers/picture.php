<?php
namespace Nicedo\Core\Helpers;

use Bitrix\Main\Application;

class Picture
{
    /**
     * Подготавливает и возвращает путь до изображения в формате WEBP
     * @param $picture
     * @return false|string
     */
    public static function getWebp($picture)
    {
        $docRoot = Application::getDocumentRoot();

        if (!empty($picture)) {
            if (intval($picture) > 0)
                $picturePath = \CFile::GetPath($picture);
            else
                $picturePath = $picture;

            if (function_exists('imageWebp')) {
                $pathInfo = pathinfo($picturePath);
                $img = false;
                $webPath = $pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['filename'] . '.webp';

                if (!file_exists($docRoot . $webPath)) {
                    $res = false;

                    switch ($pathInfo['extension']) {
                        case 'jpg':
                            $img = imageCreateFromJpeg($docRoot . $pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['basename']);
                            break;
                        case 'png':
                            $img = imageCreateFromPng($docRoot . $pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['basename']);
                            imagepalettetotruecolor($img);
                            imagealphablending($img, false);
                            imagesavealpha($img, true);
                            break;
                        case 'gif':
                            $img = imageCreateFromGif($docRoot . $pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['basename']);
                            break;
                    }

                    if ($img) {
                        $res = imagewebp($img, $docRoot . $webPath);
                        imagedestroy($img);
                    }

                    if (!$res || !$img)
                        return false;
                } else {
                    $fileSize = filesize($docRoot . $webPath);
                    if ($fileSize == 0) {
                        unlink($docRoot . $webPath);
                        return self::getWebp($picture);
                    }
                }

                return $webPath;
            }
        }
        return false;
    }

    /**
     * Делает ресайз изображения
     * @see https://dev.1c-bitrix.ru/api_help/main/reference/cfile/resizeimageget.php
     *
     * @param $picture
     * @param $width
     * @param $height
     * @param bool $initWEBP
     * если true, то в результирующий массив будет добавлен ключ "webp_src" с путем до изображения в формате WEBP
     *
     * @param int $type
     * @param bool $initSize
     * @param bool|array $filters
     * @param false $immediate
     * @param bool|int $jpgQuality
     * @return array|false|mixed
     */
    public static function crop($picture, $width, $height, bool $initWEBP = true, int $type = BX_RESIZE_IMAGE_EXACT, bool $initSize = true, $filters = false, bool $immediate = false, $jpgQuality = false)
    {
        $cropPicture = \CFile::ResizeImageGet(
            $picture,
            ['width' => $width, 'height' => $height],
            $type,
            $initSize,
            $filters,
            $immediate,
            $jpgQuality
        );

        if ($cropPicture && $initWEBP) {
            $cropPicture['webp_src'] = self::getWebp($cropPicture['src']);
        }

        return $cropPicture;
    }

    public static function getPicture($picture, $width, $height, bool $initWEBP = true, int $type = BX_RESIZE_IMAGE_EXACT, bool $initSize = true, $filters = false, bool $immediate = false, $jpgQuality = false)
    {
        $cropPicture = self::crop($picture, $width, $height, $initWEBP, $type, $initSize, $filters, $immediate, $jpgQuality);

        if ($cropPicture) {
            $picture['CROP'] = $cropPicture['src'];
            $picture['WEBP'] = $cropPicture['webp_src'];
            $picture['WIDTH'] = $cropPicture['width'];
            $picture['HEIGHT'] = $cropPicture['height'];
        }

        return $picture;
    }

    public static function getNoPhoto()
    {
        global $APPLICATION;

        $noPhotoPath = $APPLICATION->GetTemplatePath('assets/img/nophoto.jpg');

        $result = false;

        if (file_exists($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . $noPhotoPath) {
            $result = [
                'SRC' => $noPhotoPath,
                'WEBP' => self::getWebp($noPhotoPath)
            ];
        }

        return $result;
    }
}
