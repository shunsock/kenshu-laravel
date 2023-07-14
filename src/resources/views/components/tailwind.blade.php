<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        theme: {
            fontFamily: {
                'fonda': 'Fondamento',
                'cor': 'Cormorant SC',
                'noto': 'Noto Serif JP',
            },
            extend: {
                colors: {
                    monokaiComments: "#75715E",
                    monokaiWhite: "#F8F8F2",
                    monokaiYellow: "#E6DB74",
                    monokaiGreen: "#A6E22E",
                    monokaiOrange: "#FD971F",
                    monokaiPurple: "#AE81FF",
                    monokaiRed: "#F92672",
                    monokaiBlue: "#66D9EF",
                    monokaiBlack: "#161616",

                }
            }
        }
    }
</script>

<style type="text/tailwindcss">
    @layer base {
        body {
            @apply bg-monokaiWhite;
            @apply text-monokaiBlack;
        }
    }
    /*Header*/
    @layer components {
        header {
            @apply pt-8 px-32;
        }
        .title {
            @apply text-7xl pb-8;
            @apply font-cor font-bold;
        }
        .nav-menu {
            @apply flex;
        }
        .item {
            @apply inline-block;
            @apply mr-4;
            @apply text-3xl font-fonda cursor-pointer underline;
        }
        .boundary {
            @apply my-4 h-16;
            @apply border-monokaiBlack;
        }
    }
    /*Message*/
    @layer components {
        .message_box {
            @apply w-1/2;
            @apply flex;
            @apply mx-32;
            @apply my-12;
            @apply content-center;
            @apply items-center;
        }
        .message {
            @apply text-3xl;
            @apply py-4 px-16;
            @apply rounded-lg;
            @apply text-monokaiWhite;
            @apply bg-monokaiBlack;
            @apply font-noto;
        }
        .attention {
            @apply w-16;
            @apply h-16;
            @apply mr-8;
            @apply p-2;
            @apply rounded-full;
            @apply border-monokaiBlack;
            @apply border-4;
        }
    }
    /*Article Table*/
    @layer components {
        .table_article {
            @apply list-none;
        }
        .card_article {
            @apply w-full;
            @apply px-32 py-4;
            @apply my-4;
            @apply content-center;
            @apply border-monokaiBlack;
            @apply rounded-lg;
        }
        .card_article__anchor {
            @apply block;
            @apply grid grid-cols-5;
        }
        .card_article__image {
            @apply col-span-1;
            @apply rounded-lg;
            @apply grayscale;
        }
        .card_article__description {
            @apply col-span-4;
            @apply px-32 py-2;
        }
        .card_article__author {
            @apply text-sm;
            @apply py-1;
            @apply font-noto;
        }
        .card_article__title {
            @apply text-3xl;
            @apply py-4;
            @apply font-noto;
        }
        .card_article__created_at {
            @apply text-sm;
            @apply py-1;
            @apply font-fonda;
        }
        .card_article__body {
            @apply text-sm;
            @apply py-1;
            @apply font-noto;
        }
    }

    /* Form */
    @layer components {
        form.signup {
            @apply w-1/2;
            @apply mx-32;
            @apply my-20;
            @apply content-center;
            @apply items-center;
        }

        form.signup > * {
            @apply block;
            @apply rounded-lg;
            @apply my-4;
            @apply w-full;
            @apply text-xl;
            @apply font-noto;
        }

        form.signup > label {
            @apply text-3xl;
            @apply font-cor;
        }

        form.signup > input {
            @apply py-8;
            @apply px-16;
            @apply text-xl
        }
        button.submit_button {
            @apply my-12;
            @apply py-8;
            @apply px-16;
            @apply w-1/2;
            @apply bg-monokaiBlack;
            @apply text-monokaiWhite;
            @apply font-fonda;
        }
    }
</style>
