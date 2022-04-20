<?php

namespace Jetimob\Iugu\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\Iugu\IuguServiceProvider;

class IuguInstallPackage extends Command
{
    protected $signature = 'iugu:install';

    protected $description = 'Publishes Iugu\'s configuration';

    public function handle(): void
    {
        if (File::exists(config_path('iugu.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/iugu.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => IuguServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}
