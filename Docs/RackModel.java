package com.buaa.cfs.dao.model;

import org.hibernate.annotations.GenericGenerator;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 4/11/16.
 */
@Entity
public class RackModel implements Serializable {
    @Id
    @GeneratedValue(generator = "increment")
    @GenericGenerator(name = "increment", strategy = "increment")
    private int id;
    private int box_cds;
    private int layers;
    private int rows;
    private int columns;
    private int eachBlockSize; //m.
    private long eacheCdSize; //M

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
