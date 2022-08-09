<?php
include_once('../utils/common.php');
include_once('../utils/constants.php');
/**
 * Class chứa các function thực hiện việc validate các hạng mục
 */
class Validator
{
    private $comm, $cst;

    public function __construct() {
        $this->comm = new Common;
        $this->cst = new Constants;
    }
    /**
     * Validate hạng mục Họ Tên
     * @param string $name tên truyền vào để kiểm tra
     * @param int $maxLength độ dài tối đa của tên
     * @return string $errMSG thông báo lỗi nếu có
     */
    public function validateName($name, $maxLength)
    {
        if ($this->comm->checkEmpty($name)) {
            $errMSG = $this->cst::NAME_EMPTY;
        } elseif (!$this->comm->checkLength($name, $maxLength)) {
            $errMSG = $this->cst::NAME_LENGTH;
        }
        return $errMSG;
    }

    /**
     * Validate hạng mục Năm sinh
     * @param int $year năm truyền vào để kiểm tra
     * @param string $pattern biếu thức chính quy để check format
     * @param int $maxValue giá trị tối đa của năm sinh
     * @return string $errMSG thông báo lỗi nếu có
     */
    public function validateBirthYear($year, $pattern, $maxValue)
    {
        if ($this->comm->checkEmpty($year)) {
            $errMSG = $this->cst::YEAR_EMPTY;
        } elseif (!$this->comm->checkFormat($pattern, $year)) {
            $errMSG = $this->cst::YEAR_FORMAT;
        } elseif (!$this->comm->checkValue($year, $maxValue)) {
            $errMSG = $this->cst::YEAR_VALUE;
        }
        return $errMSG;
    }

    /**
     * Validate hạng mục SĐT
     * @param int $phone sđt truyền vào để kiểm tra
     * @param string $pattern biếu thức chính quy để check format
     * @param int $maxLength độ dài tối đa
     * @return string $errMSG thông báo lỗi nếu có
     */
    public function validatePhone($phone, $pattern, $maxLength)
    {
        if (!$this->comm->checkEmpty($phone)) {
            if (!$this->comm->checkFormat($pattern, $phone)) {
                $errMSG = $this->cst::PHONE_FORMAT;
            } elseif (!$this->comm->checkLength($phone, $maxLength)) {
                $errMSG = $this->cst::PHONE_LENGTH;
            }
            return $errMSG;
        }
    }

    /**
     * Validate hạng mục Email
     * @param int $email email truyền vào để kiểm tra
     * @param string $pattern biếu thức chính quy để check format
     * @param int $maxLength độ dài tối đa
     * @return string $errMSG thông báo lỗi nếu có
     */
    public function validateEmail($email, $pattern, $maxLength)
    {
        if ($this->comm->checkEmpty($email)) {
            $errMSG = $this->cst::EMAIL_EMPTY;
        } elseif (!$this->comm->checkFormat($pattern, $email)) {
            $errMSG = $this->cst::EMAIL_FORMAT;
        } elseif (!$this->comm->checkLength($email, $maxLength)) {
            $errMSG = $this->cst::EMAIL_LENGTH;
        }
        return $errMSG;
    }

    /**
     * Validate hạng mục Điểm
     * @param int $grade điểm truyền vào để kiểm tra
     * @param string $pattern biếu thức chính quy để check format
     * @param int $maxValue giá trị tối đa
     * @return string $errMSG thông báo lỗi nếu có
     */
    public function validateGrade($grade, $pattern, $maxValue)
    {
        if ($this->comm->checkEmpty($grade)) {
            $errMSG = $this->cst::GRADE_EMPTY;
        } elseif (!$this->comm->checkFormat($pattern, $grade)) {
            $errMSG = $this->cst::GRADE_FORMAT;
        } elseif (!$this->comm->checkValue((float)$grade, $maxValue)) {
            $errMSG = $this->cst::GRADE_VALUE;
        }
        return $errMSG;
    }
}
