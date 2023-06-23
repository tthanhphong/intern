const { registerBlockType } = wp.blocks;

registerBlockType('alecaddd/custom-cta', {
    //built-in attributes
    title: 'Call to Action',
    description: 'Block to generate a custom Call to Action',
    icon: 'format-image',
    category: 'layout',


    //custom attributes
    attributes: {},


    // custom Functions


    //built-in functions
    edit() {

        return null;
    },
    save() {
        return null;
    }

});