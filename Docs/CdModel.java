package com.buaa.cfs.dao.model;

import org.hibernate.annotations.GenericGenerator;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 3/21/16.
 * 对应一个盘片
 */
@Entity
public class CdModel implements Serializable {
    @Id
    @GeneratedValue(generator = "increment")
    @GenericGenerator(name = "increment", strategy = "increment")
    private long id;//自增id主键
    private int rackId;//标示是第几个rack，大柜子
    private int cdNum;//盘片编号
    private int layerNum;//大层号
    private int rowNum;//小层号
    private int columnNum;//柱号
    private boolean isBurnSuccess;//是否刻录成功

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
