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
                1: 'pl-[2rem]',
                2: 'pl-[4rem]',
                3: 'pl-[6rem]',
                4: 'pl-[8rem]',
                5: 'pl-[10rem]',
                6: 'pl-[12rem]',
            }[number];
        }
    },
}
