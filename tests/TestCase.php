<?php

namespace Tests;

use Mockery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();
        // Remove the temporary media folder
        Storage::disk('base_public')->deleteDirectory('media_temp');
        // Set the disk for spatie media library so it doesn't completely flooding the harddrive...
        config()->set('filesystems.disks.media_temp', [
            'driver' => 'local',
            'root' => public_path('media_temp'), // choose any path...
        ]);
        config()->set('medialibrary.default_filesystem', 'media_temp');
    }
    
    protected function tearDown()
    {
        // Remove everything from the testing storage folder
        Storage::disk('storage')->move('testing/logo.jpg', 'testing_temp/logo.jpg');
        Storage::disk('storage')->deleteDirectory('testing');
        Storage::disk('storage')->move('testing_temp/logo.jpg', 'testing/logo.jpg');
        Storage::disk('storage')->deleteDirectory('testing_temp');
        // Remove the temporary media folder
        Storage::disk('base_public')->deleteDirectory('media_temp');

        parent::tearDown();
    }
}
