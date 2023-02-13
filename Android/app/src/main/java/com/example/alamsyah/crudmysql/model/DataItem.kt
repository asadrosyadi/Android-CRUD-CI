package com.example.alamsyah.crudmysql.model

import com.google.gson.annotations.SerializedName
import java.io.Serializable

class DataItem : Serializable{

    @field:SerializedName("data1")
    val staffName: String? = null

    @field:SerializedName("id")
    val staffId: String? = null

    @field:SerializedName("data2")
    val staffHp: String? = null

    @field:SerializedName("data3")
    val staffAlamat: String? = null
}