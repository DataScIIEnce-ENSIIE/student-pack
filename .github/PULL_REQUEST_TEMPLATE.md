# [New SP] Adding GitHub Pro plan


Please append at the end of the document `offers.yaml` a new YAML item as follows :

```yaml
<new id>:
    title: "<Title of student plan>"
    desc: "<Small description of the plan>"
    url: "<Official URL of the student plan>"
    tested: [0|1]
```

Please check if the `<new id>` is **unique**; otherwise, errors will be detected and the PR will be **declined**.

For more information, please refer to the [README](../README.md).