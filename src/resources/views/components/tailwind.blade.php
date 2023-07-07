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

                }
            }
        }
    }
</script>

<style type="text/tailwindcss">
    @layer utilities {
        .title {
            @apply text-5xl;
            @apply font-cor font-bold;
        }
        .nav-menu {
            @apply text-2xl;
            @apply font-fonda;
        }
    }
</style>
