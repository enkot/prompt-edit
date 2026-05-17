<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';
import { login, register } from '@/routes';
import { Menu, X } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';

defineProps<{ canRegister: boolean }>();

const navLinks = [
    { href: '#tools', label: 'Tools' },
    { href: '#templates', label: 'Library' },
    { href: '#pricing', label: 'Pricing' },
    { href: '#faq', label: 'FAQ' },
];

const mobileOpen = ref(false);
const scrolled = ref(false);

function handleScroll() {
    scrolled.value = window.scrollY > 12;
}

onMounted(() => {
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <header class="fixed inset-x-0 top-0 z-50 border-b border-gray-300 transition-colors duration-300" :class="scrolled
        ? 'bg-background/90 backdrop-blur-xl'
        : 'bg-background'">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="#top" class="group flex items-center gap-2">
                <span
                    class="grid size-7 place-items-center bg-foreground font-mono text-[10px] font-bold tracking-tight text-background transition-transform group-hover:rotate-12">
                    PE
                </span>
                <span class="font-display text-lg font-bold tracking-tight text-foreground">
                    Prompt<span class="italic font-light">.edit</span>
                </span>
            </a>

            <nav class="hidden items-center gap-1 md:flex">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="px-3 py-2 text-sm font-medium text-foreground/70 uppercase tracking-wider transition-colors hover:text-foreground">
                    {{ link.label }}
                </a>
            </nav>

            <div class="hidden items-center gap-2 md:flex">
                <Link :href="login.url()"
                    class="px-3 py-2 text-sm font-medium text-foreground/80 transition-colors hover:text-foreground">
                    Log in
                </Link>
                <Link v-if="canRegister" :href="register.url()">
                    <Button size="sm"
                        class="border-2 border-foreground bg-foreground font-bold uppercase tracking-wider text-background hover:bg-background hover:text-foreground">
                        Get started
                    </Button>
                </Link>
            </div>

            <button type="button"
                class="grid size-9 place-items-center border-2 border-foreground text-foreground hover:bg-foreground hover:text-background md:hidden"
                aria-label="Toggle menu" @click="mobileOpen = !mobileOpen">
                <X v-if="mobileOpen" class="size-5" />
                <Menu v-else class="size-5" />
            </button>
        </div>

        <div v-if="mobileOpen" class="border-t border-foreground bg-background px-4 py-4 md:hidden">
            <nav class="flex flex-col gap-1">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="px-3 py-2.5 text-sm font-medium uppercase tracking-wider text-foreground hover:bg-secondary"
                    @click="mobileOpen = false">
                    {{ link.label }}
                </a>
                <div class="mt-2 grid grid-cols-2 gap-2 border-t border-foreground pt-3">
                    <Link :href="login.url()"
                        class="border-2 border-foreground px-3 py-2 text-center text-sm font-bold uppercase tracking-wider text-foreground hover:bg-secondary">
                        Log in
                    </Link>
                    <Link v-if="canRegister" :href="register.url()"
                        class="bg-foreground px-3 py-2 text-center text-sm font-bold uppercase tracking-wider text-background">
                        Get started
                    </Link>
                </div>
            </nav>
        </div>
    </header>
</template>
