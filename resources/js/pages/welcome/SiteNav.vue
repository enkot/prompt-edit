<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { login, register } from '@/routes';
import { Menu, X, Sparkles } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';

defineProps<{ canRegister: boolean }>();

const navLinks = [
    { href: '#tools', label: 'Tools' },
    { href: '#templates', label: 'Templates' },
    { href: '#pricing', label: 'Pricing' },
    { href: '#faq', label: 'FAQ' },
];

const mobileOpen = ref(false);
</script>

<template>
    <header
        class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-black/60 backdrop-blur-xl supports-[backdrop-filter]:bg-black/40">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <a href="#top" class="group flex items-center gap-2">
                <span
                    class="grid size-8 place-items-center rounded-lg bg-[var(--accent-lime)] text-black transition-transform group-hover:rotate-12">
                    <Sparkles class="size-4" :stroke-width="2.5" />
                </span>
                <span class="font-semibold tracking-tight text-white">
                    prompt<span class="text-[var(--accent-lime)]">.edit</span>
                </span>
            </a>

            <nav class="hidden items-center gap-1 md:flex">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="rounded-md px-3 py-2 text-sm text-white/70 transition-colors hover:bg-white/5 hover:text-white">
                    {{ link.label }}
                </a>
            </nav>

            <div class="hidden items-center gap-2 md:flex">
                <Link :href="login.url()"
                    class="rounded-md px-3 py-2 text-sm text-white/80 transition-colors hover:text-white">
                    Log in
                </Link>
                <Link v-if="canRegister" :href="register.url()">
                    <Button size="sm"
                        class="bg-[var(--accent-lime)] text-black shadow-[0_8px_30px_-12px_rgba(196,242,76,0.6)] hover:bg-[var(--accent-lime)]/90">
                        Get started
                    </Button>
                </Link>
            </div>

            <button type="button"
                class="grid size-9 place-items-center rounded-md text-white/80 hover:bg-white/5 md:hidden"
                aria-label="Toggle menu" @click="mobileOpen = !mobileOpen">
                <X v-if="mobileOpen" class="size-5" />
                <Menu v-else class="size-5" />
            </button>
        </div>

        <div v-if="mobileOpen" class="border-t border-white/5 bg-black/95 px-4 py-4 md:hidden">
            <nav class="flex flex-col gap-1">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="rounded-md px-3 py-2.5 text-sm text-white/80 hover:bg-white/5" @click="mobileOpen = false">
                    {{ link.label }}
                </a>
                <div class="mt-2 grid grid-cols-2 gap-2 border-t border-white/5 pt-3">
                    <Link :href="login.url()"
                        class="rounded-md border border-white/10 px-3 py-2 text-center text-sm text-white/80 hover:bg-white/5">
                        Log in
                    </Link>
                    <Link v-if="canRegister" :href="register.url()"
                        class="rounded-md bg-[var(--accent-lime)] px-3 py-2 text-center text-sm font-medium text-black">
                        Get started
                    </Link>
                </div>
            </nav>
        </div>
    </header>
</template>
