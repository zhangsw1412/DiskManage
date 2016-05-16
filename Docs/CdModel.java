package com.buaa.cfs.dao.model;

import org.hibernate.annotations.GenericGenerator;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 3/21/16.
 */
@Entity
public class CdModel implements Serializable {
    @Id
    @GeneratedValue(generator = "increment")
    @GenericGenerator(name = "increment", strategy = "increment")
    private long id;
    private int rackId;
    private int cdNum;
    private int layerNum;
    private int rowNum;
    private int columnNum;
    private boolean isBurnSuccess;

    public CdModel() {
    }

    public CdModel(int rackId, int cdNum, int layerNum, int rowNum, int columnNum, boolean isBurnSuccess) {
        this.rackId = rackId;
        this.cdNum = cdNum;
        this.layerNum = layerNum;
        this.rowNum = rowNum;
        this.columnNum = columnNum;
        this.isBurnSuccess = isBurnSuccess;
    }

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public int getRackId() {
        return rackId;
    }

    public void setRackId(int rackId) {
        this.rackId = rackId;
    }

    public int getCdNum() {
        return cdNum;
    }

    public void setCdNum(int cdNum) {
        this.cdNum = cdNum;
    }

    public int getLayerNum() {
        return layerNum;
    }

    public void setLayerNum(int layerNum) {
        this.layerNum = layerNum;
    }

    public int getRowNum() {
        return rowNum;
    }

    public void setRowNum(int rowNum) {
        this.rowNum = rowNum;
    }

    public int getColumnNum() {
        return columnNum;
    }

    public void setColumnNum(int columnNum) {
        this.columnNum = columnNum;
    }

    public boolean isBurnSuccess() {
        return isBurnSuccess;
    }

    public void setBurnSuccess(boolean burnSuccess) {
        isBurnSuccess = burnSuccess;
    }
}
