<script setup lang="ts">
import {
    Accordion,
    AccordionItem,
    AccordionTrigger,
    AccordionContent,
} from '@/components/ui/accordion';

const faqs = [
    {
        q: 'What is PromptEdit.com?',
        a: 'Prompt Edit is a pay-as-you-go marketplace for every major AI tool — image, video, audio, and editing plugins. One balance, one interface, zero subscriptions required.',
    },
    {
        q: 'Can I use what I create for social media or commercial videos?',
        a: 'Yes. Anything you generate is yours to use commercially, including ads, client work, YouTube monetisation, and social content.',
    },
    {
        q: 'Is there a quality difference between AI tools on Prompt Edit and the same tool on the original site?',
        a: 'No. Prompt Edit calls the same underlying models — Veo, Kling, ElevenLabs, Suno, Heygen, Ideogram and the rest — so the output quality is identical to going direct.',
    },
    {
        q: 'What is the Content Creator Templates Library?',
        a: 'A library of 100,000+ professionally designed editing assets: LUTs, sound effects, text animations, overlays, and backgrounds. Included with the monthly subscription.',
    },
    {
        q: 'Do any limits apply to downloads?',
        a: 'Subscribers get unlimited downloads and unlimited usage across personal and commercial projects.',
    },
    {
        q: 'Will the templates work in my editing platform?',
        a: 'Yes. Templates ship with versions for Premiere Pro, DaVinci Resolve, Final Cut Pro, CapCut and other major NLEs.',
    },
    {
        q: 'Can I cancel any time?',
        a: 'Cancel from your dashboard with one click. Within 30 days of signing up you can also request a full refund on any unused credits.',
    },
    {
        q: 'What happens to the templates I have downloaded if I cancel?',
        a: 'Anything you already downloaded and used in a project is yours to keep. You just lose access to download new assets after cancellation.',
    },
];
</script>

<template>
    <section id="faq" class="relative bg-background py-16 sm:py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="font-mono text-[11px] tracking-[0.3em] text-muted-foreground uppercase">
                    Questions, answered
                </p>
                <h2 class="font-display mt-4 text-4xl font-medium tracking-[-0.03em] text-foreground sm:text-6xl">
                    Commonly asked <span class="italic font-light">questions.</span>
                </h2>
            </div>

            <Accordion type="single" collapsible class="mt-12 border border-border bg-card px-6 sm:px-8">
                <AccordionItem v-for="(faq, idx) in faqs" :key="faq.q" :value="`item-${idx}`">
                    <AccordionTrigger>{{ faq.q }}</AccordionTrigger>
                    <AccordionContent>{{ faq.a }}</AccordionContent>
                </AccordionItem>
            </Accordion>
        </div>
    </section>
</template>
