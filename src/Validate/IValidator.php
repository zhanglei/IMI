<?php
namespace Imi\Validate;

interface IValidator
{
    /**
     * 设置验证器中的数据
     *
     * @param array|object $data
     * @return void
     */
    public function setData(&$data);

    /**
     * 获取验证器中的数据
     *
     * @return array|object
     */
    public function getData();

    /**
     * 设置校验规则
     *
     * @param \Imi\Validate\Annotation\Condition[] $rules
     * 
     * @return void
     */
    public function setRules($rules);

    /**
     * 获得所有校验规则
     *
     * @return \Imi\Validate\Annotation\Condition[]
     */
    public function getRules();

    /**
     * 获得所有注解校验规则
     *
     * @return \Imi\Validate\Annotation\Condition[]
     */
    public function getAnnotationRules();

    /**
     * 验证，返回是否通过
     * 当遇到不通过时结束验证流程
     *
     * @return boolean
     */
    public function validate();

    /**
     * 验证所有，返回是否通过
     *
     * @return boolean
     */
    public function validateAll();

    /**
     * 获取第一条失败信息
     *
     * @return string
     */
    public function getMessage();

    /**
     * 获取所有验证结果
     *
     * @return array
     */
    public function getResults();
}