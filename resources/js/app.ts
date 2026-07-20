import { createInertiaApp } from '@inertiajs/vue3';
import { initializeTheme } from '@/composables/useAppearance';
import { initializeFlashToast } from '@/lib/flashToast';
import { appName, resolveLayout } from '@/lib/inertiaApp';

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    layout: resolveLayout,
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();

// This will listen for flash toast data from the server...
initializeFlashToast();
