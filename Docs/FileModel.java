package com.buaa.cfs.dao.model;

import org.hibernate.annotations.GenericGenerator;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.io.Serializable;

/**
 * Created by root on 3/7/16.
 */
@Entity
public class FileModel implements Serializable {
    @Id
    @GeneratedValue(generator = "increment")
    @GenericGenerator(name = "increment", strategy = "increment")
    private long fileId;
    private byte[] fileName;
    @Column(unique = true, nullable = false)
    private String filePath;
    private boolean is_dir;
    private long blockSize;
    private long modificationTime;
    private long accessTime;
    private String fileOwner;
    private String fileGroup;
    private long md5Value;
    private int children_num;

    public FileModel() {

    }

    public FileModel(long fileId, byte[] fileName, String filePath, boolean is_dir, long blockSize, long modificationTime, long accessTime, String fileOwner, String fileGroup, long md5Value) {
        this.fileId = fileId;
        this.fileName = fileName;
        this.filePath = filePath;
        this.is_dir = is_dir;
        this.blockSize = blockSize;
        this.modificationTime = modificationTime;
        this.accessTime = accessTime;
        this.fileOwner = fileOwner;
        this.fileGroup = fileGroup;
        this.md5Value = md5Value;
    }

    public FileModel(byte[] fileName, String filePath, boolean is_dir, long blockSize, long modificationTime, long accessTime, String fileOwner, String fileGroup, long md5Value, int children_num) {
        this.fileName = fileName;
        this.filePath = filePath;
        this.is_dir = is_dir;
        this.blockSize = blockSize;
        this.modificationTime = modificationTime;
        this.accessTime = accessTime;
        this.fileOwner = fileOwner;
        this.fileGroup = fileGroup;
        this.md5Value = md5Value;
        this.children_num = children_num;
    }

    public long getFileId() {
        return fileId;
    }

    public void setFileId(long fileId) {
        this.fileId = fileId;
    }

    public byte[] getFileName() {
        return fileName;
    }

    public void setFileName(byte[] fileName) {
        this.fileName = fileName;
    }

    public String getFilePath() {
        return filePath;
    }

    public void setFilePath(String filePath) {
        this.filePath = filePath;
    }

    public boolean is_dir() {
        return is_dir;
    }

    public void setIs_dir(boolean is_dir) {
        this.is_dir = is_dir;
    }

    public long getBlockSize() {
        return blockSize;
    }

    public void setBlockSize(long blockSize) {
        this.blockSize = blockSize;
    }

    public long getModificationTime() {
        return modificationTime;
    }

    public void setModificationTime(long modificationTime) {
        this.modificationTime = modificationTime;
    }

    public long getAccessTime() {
        return accessTime;
    }

    public void setAccessTime(long accessTime) {
        this.accessTime = accessTime;
    }

    public String getFileOwner() {
        return fileOwner;
    }

    public void setFileOwner(String fileOwner) {
        this.fileOwner = fileOwner;
    }

    public String getFileGroup() {
        return fileGroup;
    }

    public void setFileGroup(String fileGroup) {
        this.fileGroup = fileGroup;
    }

    public long getMd5Value() {
        return md5Value;
    }

    public void setMd5Value(long md5Value) {
        this.md5Value = md5Value;
    }

    public int getChildren_num() {
        return children_num;
    }

    public void setChildren_num(int children_num) {
        this.children_num = children_num;
    }
}
