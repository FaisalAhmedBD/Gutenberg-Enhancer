const { __ } = wp.i18n
const { registerBlockType } = wp.blocks


registerBlockType('gutenberg-customizer/basic-block', {
    title: 'Basic Block',
    icon: 'universal-access-alt',
    category: 'layout',
    // used in editor
    edit() {
        return <div>
            <h2>This is my first custom block in gutenberg</h2>
            <p1>I am feeling really excited</p1>
        </div>
    },
    //used in frontend
    save() {
        return <div>
            <h2>This is my first custom block in gutenberg</h2>
            <p1>I am feeling really excited</p1>
        </div>
    }
})