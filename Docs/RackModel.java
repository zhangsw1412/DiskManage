package com.buaa.cfs.dao.model;

import org.hibernate.annotations.GenericGenerator;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 4/11/16.
 * rack就是一个大笼子
 */
@Entity
public class RackModel implements Serializable {
    @Id
    @GeneratedValue(generator = "increment")
    @GenericGenerator(name = "increment", strategy = "increment")
    private int id;
    private int box_cds;//这个是最小单位，小匣子里的盘片数量
    private int layers;//大的层数
    private int rows;//小的层数
    private int columns;//列数
    private int eachBlockSize; //m.每个文件块的大小 64M
    private long eachCdSize; //M.每个盘片的容量300*1024M

    public RackModel(int box_cds, int layers, int rows, int columns, int eachBlockSize, long eacheCdSize) {
        this.box_cds = box_cds;
        this.layers = layers;
        this.rows = rows;
        this.columns = columns;
        this.eachBlockSize = eachBlockSize;
        this.eacheCdSize = eacheCdSize;
    }

    public int getEachBlockSize() {
        return eachBlockSize;
    }

    public void setEachBlockSize(int eachBlockSize) {
        this.eachBlockSize = eachBlockSize;
    }

    public long getEacheCdSize() {
        return eacheCdSize;
    }

    public void setEacheCdSize(long eacheCdSize) {
        this.eacheCdSize = eacheCdSize;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getBox_cds() {
        return box_cds;
    }

    public void setBox_cds(int box_cds) {
        this.box_cds = box_cds;
    }

    public int getLayers() {
        return layers;
    }

    public void setLayers(int layers) {
        this.layers = layers;
    }

    public int getRows() {
        return rows;
    }

    public void setRows(int rows) {
        this.rows = rows;
    }

    public int getColumns() {
        return columns;
    }

    public void setColumns(int columns) {
        this.columns = columns;
    }
}
