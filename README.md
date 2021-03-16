# PhpPatterns
php设计模式
***

- 运行测试 `./vendor/bin/phpunit`

***
### 创建型模式实例
- 单例模式 ✅
- 工厂模式 ✅
- 抽象工厂模式 ✅
- 简单工厂模式 ✅
- 静态工厂模式 ✅
- 原型模式 ✅
- 建造者模式 ✅

### 结构型模式实例
- 桥接模式 ✅
- 享元模式 ✅
- 外观模式 ✅
- 适配器模式 ✅
- 装饰器模式 ✅
- 组合模式 ✅
- 代理模式 ✅
- 过滤器模式 ✅

### 行为型模式实例
- 模板模式 ✅
- 策略模式 ✅
- 状态模式 ✅
- 观察者模式 ✅
- 责任链模式 ✅
- 访问者模式 ✅
- 解释器模式
- 备忘录模式 ✅
- 命令模式
- 迭代器模式
- 中介者器模式
- 空对象模式

***
### 创建型模式实例
创建型模式用来处理对象的创建过程。对类的实例化过程进行了抽象，将对象的创建和使用分离。
在使用这些对象时只需要知道接口，而不用关心细节

### 结构型模式实例
结构型模式用来处理类或者对象的组合。把类或对象通过各种方式进行组合，形成一个更大的结构，以完成更为复杂的任务

### 行为型模式实例
行为型模式用来处理类或对象的交互关系。用于描述类或对象之间怎样相互协作共同完成单个对象无法胜任的任务，
以及怎样分配职责类和对象如何交互，及划分责任和算法,这些设计模式特别关注对象之间的通信。

***
### SOLID原则

单一责任原则：一个类只做一件事儿，多的进行拆分交给其他类

开放封闭原则：对扩展开放，对修改封闭。 实例的内部不可修改，但可以通过继承等方式增加新功能

依赖倒置原则：对接口编程，依赖于抽象而不依赖于具体。公共部分抽离为接口、抽象类，大家再去实现这个接口，而不是互相依赖。

接口隔离原则：使用多个接口，而不是对一个接口编程，去依赖降低耦合

里氏替换原则：超类（父类）出现的地方，派生类（子类）都可以出现。父类能做的子类也能做，反之不一定
