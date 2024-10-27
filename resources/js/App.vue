<template>
    <div class="explorer">
        <div class="left-panel">
            <FolderTree :folders="folders" @folderSelected="fetchFolder" />
        </div>
        <div class="right-panel" v-if="selectedFolder">
            <FolderContents :selectedFolder="selectedFolder" />
        </div>
    </div>
</template>

<script>
import FolderTree from "./components/FolderTree.vue";
import FolderContents from "./components/FolderContents.vue";
import axios from "axios";

export default {
    components: { FolderTree, FolderContents },
    data() {
        return {
            folders: [],
            selectedFolder: null,
        };
    },
    mounted() {
        this.fetchFolders();
    },
    methods: {
        fetchFolders() {
            axios.get("/api/folders").then((response) => {
                this.folders = response.data;
            });
        },
        fetchFolder(id) {
            axios.get(`/api/folders/${id}`).then((response) => {
                this.selectedFolder = response.data;
            });
        },
    },
};
</script>

<style>
.explorer {
    display: flex;
}
.left-panel {
    width: 30%;
    border-right: 1px solid #ccc;
    padding: 10px;
}
.right-panel {
    width: 70%;
    padding: 10px;
}
</style>
