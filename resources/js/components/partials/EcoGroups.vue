<template>
    <div>
        <div v-if="groups_info" class="profile">
            <div
                class="group-card"
                v-for="group in groups_info"
                :key="group.id"
            >
                <h1><b>Title: </b>{{ group.title }}</h1>
                <h1><b>Purpose: </b>{{ group.purpose }}</h1>
                <div class="events">
                    <ul class="event-list">
                        <li v-for="event in group.events" :key="event.id">{{ event.description }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div v-else class="empty">
            <h1>Have not any groups and events!</h1>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            groups_info: null,
        };
    },
    mounted() {
        console.log("request");
        fetch("/api/eco-groups", {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        }).then((response) => {
            response.json().then((data) => {
                console.log(data);
                this.groups_info = data;
            });
        });
    },
};
</script>

<style lang="scss" scoped>
.profile, .empty {
    padding: 20px 10px;
    font-size: 22pt;
}
.event-list {
    padding-top: 10px;
    padding-left: 30px;
}
h1 b {
    font-weight: 900;
}
</style>
