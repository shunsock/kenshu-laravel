<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        theme: {
            fontFamily: {
                'fonda': 'Fondamento',
                'cor': 'Cormorant SC'
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
            @apply p-8;
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
</style>
