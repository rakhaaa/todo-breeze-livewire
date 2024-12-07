import './bootstrap';
import 'flowbite';
import './theme';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

window.Alpine = Alpine;

Livewire.start();