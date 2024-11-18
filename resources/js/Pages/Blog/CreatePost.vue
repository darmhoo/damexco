<script setup lang="js">
import BlogLayout from '../../Layouts/BlogLayout.vue';
import { useForm } from '@inertiajs/vue3';
import {
    ClassicEditor,
    AccessibilityHelp,
    Autoformat,
    AutoLink,
    Autosave,
    BalloonToolbar,
    BlockQuote,
    Bold,
    Code,
    CodeBlock,
    Essentials,
    FindAndReplace,
    Heading,
    Highlight,
    HorizontalLine,
    HtmlEmbed,
    Indent,
    IndentBlock,
    Italic,
    Link,
    Paragraph,
    SelectAll,
    SpecialCharacters,
    SpecialCharactersArrows,
    SpecialCharactersCurrency,
    SpecialCharactersEssentials,
    SpecialCharactersLatin,
    SpecialCharactersMathematical,
    SpecialCharactersText,
    Strikethrough,
    Table,
    TableCellProperties,
    TableProperties,
    TableToolbar,
    TextTransformation,
    Underline,
    Undo
} from 'ckeditor5';
import { Ckeditor } from '@ckeditor/ckeditor5-vue';
import 'ckeditor5/ckeditor5.css';

const form = useForm({
    title: null,
    description: null,
    content: '',

});

defineProps({
    errors: Object
})

const isLayoutReady = true;

const editorConfig = {
    plugins: [AccessibilityHelp,
        Autoformat,
        AutoLink,
        Autosave,
        BalloonToolbar,
        BlockQuote,
        Bold,
        Code,
        CodeBlock,
        Essentials,
        FindAndReplace,
        Heading,
        Highlight,
        HorizontalLine,
        HtmlEmbed,
        Indent,
        IndentBlock,
        Italic,
        Link,
        Paragraph,
        SelectAll,
        SpecialCharacters,
        SpecialCharactersArrows,
        SpecialCharactersCurrency,
        SpecialCharactersEssentials,
        SpecialCharactersLatin,
        SpecialCharactersMathematical,
        SpecialCharactersText,
        Strikethrough,
        Table,
        TableCellProperties,
        TableProperties,
        TableToolbar,
        TextTransformation,
        Underline,
        Undo],

    balloonToolbar: ['bold', 'italic', '|', 'link'],
    heading: {
        options: [
            {
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
            },
            {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'text-3xl'
            },
            {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            },
            {
                model: 'heading3',
                view: 'h3',
                title: 'Heading 3',
                class: 'ck-heading_heading3'
            },
            {
                model: 'heading4',
                view: 'h4',
                title: 'Heading 4',
                class: 'ck-heading_heading4'
            },
            {
                model: 'heading5',
                view: 'h5',
                title: 'Heading 5',
                class: 'ck-heading_heading5'
            },
            {
                model: 'heading6',
                view: 'h6',
                title: 'Heading 6',
                class: 'ck-heading_heading6'
            }
        ]
    },
    initialData:
        '<h2>Congratulations on setting up CKEditor 5! 🎉</h2>\n<p>\n    You\'ve successfully created a CKEditor 5 project. This powerful text editor will enhance your application, enabling rich text editing\n    capabilities that are customizable and easy to use.\n</p>\n<h3>What\'s next?</h3>\n<ol>\n    <li>\n        <strong>Integrate into your app</strong>: time to bring the editing into your application. Take the code you created and add to your\n        application.\n    </li>\n    <li>\n        <strong>Explore features:</strong> Experiment with different plugins and toolbar options to discover what works best for your needs.\n    </li>\n    <li>\n        <strong>Customize your editor:</strong> Tailor the editor\'s configuration to match your application\'s style and requirements. Or even\n        write your plugin!\n    </li>\n</ol>\n<p>\n    Keep experimenting, and don\'t hesitate to push the boundaries of what you can achieve with CKEditor 5. Your feedback is invaluable to us\n    as we strive to improve and evolve. Happy editing!\n</p>\n<h3>Helpful resources</h3>\n<ul>\n    <li>📝 <a href="https://orders.ckeditor.com/trial/premium-features">Trial sign up</a>,</li>\n    <li>📕 <a href="https://ckeditor.com/docs/ckeditor5/latest/installation/index.html">Documentation</a>,</li>\n    <li>⭐️ <a href="https://github.com/ckeditor/ckeditor5">GitHub</a> (star us if you can!),</li>\n    <li>🏠 <a href="https://ckeditor.com">CKEditor Homepage</a>,</li>\n    <li>🧑‍💻 <a href="https://ckeditor.com/ckeditor-5/demo/">CKEditor 5 Demos</a>,</li>\n</ul>\n<h3>Need help?</h3>\n<p>\n    See this text, but the editor is not starting up? Check the browser\'s console for clues and guidance. It may be related to an incorrect\n    license key if you use premium features or another feature-related requirement. If you cannot make it work, file a GitHub issue, and we\n    will help as soon as possible!\n</p>\n',
    link: {
        addTargetToExternalLinks: true,
        defaultProtocol: 'https://',
        decorators: {
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    menuBar: {
        isVisible: true
    },
    placeholder: 'Type or paste your content here!',
    table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
    },
    toolbar: {
        items: [
            'undo',
            'redo',
            '|',
            'heading',
            '|',
            'bold',
            'italic',
            'underline',
            '|',
            'link',
            'insertTable',
            'highlight',
            'blockQuote',
            'codeBlock',
            '|',
            'outdent',
            'indent'
        ],
        shouldNotGroupWhenFull: false
    },
}
</script>
<template>
    <BlogLayout>
        <div class="flex flex-col mx-10">
            <h3 class="text-3xl my-10">Create Blog</h3>
            <form @submit.prevent="form.post('/blog/create')" class="flex flex-col gap-5">
                <div>
                    <label for="title" class="text-lg font-medium">Title: </label>
                    <input type="text" name="title" v-model="form.title"
                        class="border border-neutral-500 text-lg px-5 block py-1 rounded-md" />
                    <div v-if="errors.title" class="text-sx text-red-400">{{ errors.title }}</div>
                </div>
                <div>
                    <label for="title">Description: </label>
                    <input type="text" name="title" v-model="form.description"
                        class="border border-neutral-500 text-lg px-5 block py-1 rounded-md" />

                        <div v-if="errors.description" class="text-sx text-red-400">{{ errors.description }}</div>
                    
                </div>
                <div class="w-4/5">
                    <label for="title">Content: </label>

                    <div class="main-container">
                        <div class="editor-container editor-container_classic-editor" ref="editorContainerElement">
                            <div class="editor-container__editor">
                                <div ref="editorElement">
                                    <ckeditor v-if="isLayoutReady" v-model="form.content" :editor="ClassicEditor"
                                        :config="editorConfig" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="errors.content" class="text-sx text-red-400">{{ errors.content }}</div>

                </div>
                <div></div>
                <div></div>
                <div></div>
                <div class="mb-2 w-2/5">
                    <button type="submit"
                        class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </BlogLayout>
</template>
<style></style>