package com.buaa.cfs.dao.model;

import javax.persistence.Entity;
import java.io.Serializable;

/**
 * Created by root on 5/16/16.
 */
@Entity
public class InitModel implements Serializable {
    private int write_channel_timeout; //s在这个规定时间里，如果一直没有数据传送，则认定文件传输完成
    private long readCacheSize; //G读缓存
    private int NFS_read_size; //k最大是1024，NFS读尺寸
    private int NFS_write_size; //k最大是1024，NFS写尺寸
    private String readCachePre; //home/yjl/cfs/db5读缓存目录
    private String writeCachePre;//写缓存目录
    private String isoPre;//打包目录
    private String linkPre;//链接分块
    private String dirPre;//假目录


    public InitModel(int write_channel_timeout, long readCacheSize, int NFS_read_size, int NFS_write_size, String readCachePre, String writeCachePre, String isoPre, String linkPre, String dirPre) {
        this.write_channel_timeout = write_channel_timeout;
        this.readCacheSize = readCacheSize;
        this.NFS_read_size = NFS_read_size;
        this.NFS_write_size = NFS_write_size;
        this.readCachePre = readCachePre;
        this.writeCachePre = writeCachePre;
        this.isoPre = isoPre;
        this.linkPre = linkPre;
        this.dirPre = dirPre;
    }

    public String getReadCachePre() {
        return readCachePre;
    }

    public void setReadCachePre(String readCachePre) {
        this.readCachePre = readCachePre;
    }

    public String getWriteCachePre() {
        return writeCachePre;
    }

    public void setWriteCachePre(String writeCachePre) {
        this.writeCachePre = writeCachePre;
    }

    public String getIsoPre() {
        return isoPre;
    }

    public void setIsoPre(String isoPre) {
        this.isoPre = isoPre;
    }

    public String getLinkPre() {
        return linkPre;
    }

    public void setLinkPre(String linkPre) {
        this.linkPre = linkPre;
    }

    public String getDirPre() {
        return dirPre;
    }

    public void setDirPre(String dirPre) {
        this.dirPre = dirPre;
    }

    public int getWrite_channel_timeout() {
        return write_channel_timeout;
    }

    public void setWrite_channel_timeout(int write_channel_timeout) {
        this.write_channel_timeout = write_channel_timeout;
    }

    public long getReadCacheSize() {
        return readCacheSize;
    }

    public void setReadCacheSize(long readCacheSize) {
        this.readCacheSize = readCacheSize;
    }

    public int getNFS_read_size() {
        return NFS_read_size;
    }

    public void setNFS_read_size(int NFS_read_size) {
        this.NFS_read_size = NFS_read_size;
    }

    public int getNFS_write_size() {
        return NFS_write_size;
    }

    public void setNFS_write_size(int NFS_write_size) {
        this.NFS_write_size = NFS_write_size;
    }
}
