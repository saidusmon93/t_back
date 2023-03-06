<template>
    <el-row type="flex" class="row-bg" justify="center">
        <el-col :span="18">
            <el-select
                v-model="value"
                @change="searchRoom(value)"
                filterable
                placeholder="Select"
            >
                <el-option
                    v-for="item in rooms"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value"
                >
                </el-option>
            </el-select>
            <el-table
                :data="tableData"
                border
                size="mini"
                row-class-name="no-hover"
            >
                <el-table-column prop="time" label="Time"></el-table-column>
                <el-table-column
                    v-for="(weekday, index) in weekdays"
                    :key="index"
                    :prop="weekday.name"
                    :label="weekday.name"
                >
                    <template slot-scope="{ row }">
                        <div
                            v-for="lesson in row[weekday.name]"
                            :key="lesson.id"
                        >
                            <div>{{ lesson.teacher.name }}</div>
                            <div>{{ lesson.lesson.subject }}</div>
                            <div>{{ lesson.group.name }}</div>
                            <div>{{ lesson.room.name }}</div>
                        </div>
                    </template>
                </el-table-column>
            </el-table>
        </el-col>
    </el-row>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            value: "",
            weekdays: [],
            times: [],
            lessons: [],
            rooms: [],
        };
    },
    created() {
        axios
            .get("/api/less")
            .then((response) => {
                this.lessons = response.data.lessons;
                this.weekdays = response.data.weekdays;
                this.times = response.data.times;
                this.rooms = response.data.rooms.map((item) => {
                    return { value: item.id, label: item.name };
                });
                console.log(response.data);
            })
            .catch((e) => {
                console.log(e);
            });
    },
    computed: {
        tableData() {
            const data = [];

           
            for (let i = 0; i < this.times.length; i++) {
                const row = {
                    time: `${this.times[i].start_time} - ${this.times[i].end_time}`,
                };

              
                for (let j = 0; j < this.weekdays.length; j++) {
                    row[this.weekdays[j].name] = this.lessons.filter(
                        (lesson) => {
                            return (
                                lesson.weekday_id === this.weekdays[j].id &&
                                lesson.time_id === this.times[i].id
                            );
                        }
                    );
                }

                data.push(row);
            }

            return data;
        },
    },
    methods: {
        async searchRoom(value) {
            await axios
                .get("api/search/" + value)
                 .then((response) => {
                this.lessons = response.data.lessons;
                this.weekdays = response.data.weekdays;
                this.times = response.data.times;
                this.rooms = response.data.rooms.map((item) => {
                    return { value: item.id, label: item.name };
                });
                console.log(response.data);
            })
                .catch((e) => {
                    console.error(e);
                });
        },
    },
};
</script>
<style>
.no-hover:hover > td {
    background-color: initial !important;
}
.el-table table {
  background-color: #999;
}
</style>
