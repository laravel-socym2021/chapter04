<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use function response;

final class DownloadAction
{
    public function __invoke(Request $request): BinaryFileResponse
    {
        Response::download('/path/to/file.pdf');
        // ヘルパー関数を利用する場合
        $response = response()->download('/path/to/file.pdf');
        // content-typeを指定
        $response = response()->download(
            '/path/to/file.pdf',
            'filename.pdf',
            [
                'content-type' => 'application/pdf',
            ]
        );
        return $response;
    }
}
