<template>
    <div>
        <ul>
            <li
                v-for="folder in folders"
                :key="folder.id"
                @click="selectFolder(folder.id)"
            >
                {{ folder.name }}
                <FolderTree v-if="folder.children" :folders="folder.children" />
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        folders: Array,
    },
    methods: {
        selectFolder(id) {
            this.$emit("folderSelected", id);
        },
    },
};
</script>
