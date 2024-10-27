<!-- resources/js/components/FolderContents.vue -->
<template>
    <div>
        <h2>Contents of {{ selectedFolder.name }}</h2>
        <ul>
            <li v-for="folder in selectedFolder.children" :key="folder.id">
                {{ folder.name }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        selectedFolder: Object,
    },
};
</script>
