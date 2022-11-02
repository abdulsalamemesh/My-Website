export default {
    methods: {
        __(key, replace = {}) {
            var translation = this.$page.props.language[key]
                ? this.$page.props.language[key]
                : key
            Object.keys(replace).forEach(function (key) {
                translation = translation.replace(':' + key, replace[key])
            });
            return translation
        },

        paddingLevel(number) {
            return {
                1: 'pl-[0.75rem] md:pl-[1.5rem]',
                2: 'pl-[1.5rem] md:pl-[3rem]',
                3: 'pl-[2.25rem] md:pl-[4.5rem]',
                4: 'pl-[3rem] md:pl-[6rem]',
                5: 'pl-[3.75rem] md:pl-[7.5rem]',
                6: 'pl-[4.5rem] md:pl-[9rem]',
            }[number];
        }
    },
}
