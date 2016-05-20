package com.buaa.cfs.dao.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 3/7/16.
 */
@Entity
public class BlockModel implements Serializable {
    @Id
    private String fileId_offset;//文件id和偏移量的拼接，是两个long类型拼一块儿
    private long blockOffset;//块偏移
    private int realSize;//实际大小
    private String crc32_value;//crc校验码
    private long fileId;//就是fileid,文件编号
    @Column(unique = true)
    private String blockPath;//在硬盘上的绝对路径
    private String cdPath;//在盘片上的路径
    private int block_replication;//有多少个块的副本
    private int rackId;//
    private int rowNum;
    private int layerNum;
    private int columnNum;
    private int cdNum;
    private boolean isEOF;//标记文件结束
    private boolean isBurnSuccess;//标记是否刻录成功

    public BlockModel() {

    }

    public String getFileId_offset() {
        return fileId_offset;
    }

    public void setFileId_offset() {
        this.fileId_offset = this.fileId + "_" + this.blockOffset;
    }

    public boolean isBurnSuccess() {
        return isBurnSuccess;
    }

    public void setBurnSuccess(boolean burnSuccess) {
        isBurnSuccess = burnSuccess;
    }

    public int getRackId() {
        return rackId;
    }

    public void setRackId(int rackId) {
        this.rackId = rackId;
    }

    public int getRowNum() {
        return rowNum;
    }

    public void setRowNum(int rowNum) {
        this.rowNum = rowNum;
    }

    public int getLayerNum() {
        return layerNum;
    }

    public void setLayerNum(int layerNum) {
        this.layerNum = layerNum;
    }

    public int getColumnNum() {
        return columnNum;
    }

    public void setColumnNum(int columnNum) {
        this.columnNum = columnNum;
    }

    public int getCdNum() {
        return cdNum;
    }

    public void setCdNum(int cdNum) {
        this.cdNum = cdNum;
    }

    public boolean isEOF() {
        return isEOF;
    }

    public void setEOF(boolean EOF) {
        isEOF = EOF;
    }

    public long getBlockOffset() {
        return blockOffset;
    }

    public int getBlock_replication() {
        return block_replication;
    }

    public void setBlock_replication(int block_replication) {
        this.block_replication = block_replication;
    }

    public void setBlockOffset(long blockOffset) {
        this.blockOffset = blockOffset;
        setFileId_offset();
    }

    public int getRealSize() {
        return realSize;
    }

    public long getFileId() {
        return fileId;
    }

    public void setFileId(long fileId) {
        this.fileId = fileId;
    }

    public String getBlockPath() {
        return blockPath;
    }

    public void setBlockPath(String blockPath) {
        if (blockPath.endsWith("/")) {
            blockPath = blockPath.substring(0, blockPath.lastIndexOf("/"));
        }
        this.blockPath = blockPath;
    }

    public void setRealSize(int realSize) {
        this.realSize = realSize;
    }

    public String getCrc32_value() {
        return crc32_value;
    }

    public void setCrc32_value(String crc64_value) {
        this.crc32_value = crc64_value;
    }

    public String getCdPath() {
        return cdPath;
    }

    public void setCdPath(String cdPath) {
        this.cdPath = cdPath;
    }
}
