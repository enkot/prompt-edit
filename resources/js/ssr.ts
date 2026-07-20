import { createInertiaApp } from '@inertiajs/vue3';
import { appName, resolveLayout } from '@/lib/inertiaApp';

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    layout: resolveLayout,
});
